---
description: Turn "what happened / what should happen" into a compact, token-saving prompt for /feature
argument-hint: <feature|improvement|bug> what happen: <...> what should happen: <...>
---

# Role: Prompt Engineer

Turn the developer's description into a short, precise prompt for the `/feature` command. The goal is to cut tokens downstream: the planner should be able to go straight to the right files instead of exploring broadly. **Do not plan, write code, or edit files.**

Input: **$ARGUMENTS**

## 1. Parse the input

Expected format (multi-line):

```
/feature-prompt <feature|improvement|bug>

what happen:
<current behaviour, or what is missing for a feature>

what should happen:
<expected behaviour>
```

Parsing rules:
- **Type** is the first word: `feature` (new capability), `improvement` (change existing behaviour/UI), or `bug` (behaviour is wrong). Accept close variants such as `fix`, `bugfix` or `enhancement`. If the type is missing, infer it.
- **What happened** is the text after the `what happen` label (also accept `what happened`, any case, colon optional) up to the next label.
- **What should happen** is the text after the `what should happen` label (colon optional) to the end.
- If there are no labels, fall back to free text and infer both parts.

If the input is empty, or either section is empty or can't be determined, ask in **one** `AskUserQuestion` call covering only the missing pieces, then continue.

## 2. Lightweight grounding (keep it cheap)

Spend at most ~3 lookups to locate where the change belongs:
- If `graphify-out/graph.json` exists, use `graphify query "<short question>"`. Otherwise use one or two targeted Grep/Glob searches (route names, view names, visible text).
- Use `php artisan route:list --except-vendor` only if a route is involved.

Record exact paths and symbols, e.g. `resources/views/welcome.blade.php`, `routes/web.php` → `home`, or `tests/Feature/ExampleTest.php`. Don't read whole files and don't design the solution; that's the planner's job. If nothing obvious turns up, say "Location: unknown — planner to locate" rather than guessing.

## 3. Write the prompt

Rules:
- Use terse fragments, no filler, no restating project conventions (the pipeline already enforces AGENTS.md).
- Make acceptance criteria observable and testable (they become PHPUnit test cases).
- **For bugs:** include reproduction steps and require a regression test that fails before the fix.
- **For improvements:** state what must stay unchanged.
- Out of scope: list only what's likely to creep in.
- Target fewer than 120 words in the prompt body.

Template (omit lines that don't apply):

```
/feature [<type>] <imperative one-line title>
Now: <what happened>
Expected: <what should happen>
Repro: <steps>                       (bug only)
Where: <path[:symbol]>, <path>       (from grounding)
Accept:
- <observable criterion>
- <observable criterion>
- Regression test covers <case>     (bug only)
Keep: <behaviour that must not change>   (improvement/bug)
Out of scope: <item>
```

## 4. Output and next step

Show the generated prompt in one fenced code block, then a single line with the estimated word count. Then use `AskUserQuestion`: "Run /feature with this prompt?"
- **Run now:** read `.claude/commands/feature.md` and follow it, using the prompt body as the feature request (without the leading `/feature`).
- **Revise:** apply the developer's notes, regenerate, and ask again.
- **Copy only:** stop; the developer will paste it themselves.

---
description: Run the full feature pipeline — plan → architecture → build (with approval) → review
argument-hint: <what you want to implement>
---

# Feature Pipeline

Feature request: **$ARGUMENTS**

If the request is empty, ask the developer what they want to implement and stop.

You are the **orchestrator**. Each phase runs as its own subagent so each role works in a fresh context, handing off through the plan file in `.claude/plans/`. Phases depend on each other, so run them in order and wait for each to finish. Only the approval gate runs in this main conversation, because it needs the developer.

Before each phase, post a one-line progress update (e.g. "Phase 2/4 — architecture review running…").

## Phase 1 — Plan

Launch a `general-purpose` Agent (description "Plan feature"). Prompt: read `.claude/commands/plan.md` and follow it exactly as the Planner, with `$ARGUMENTS` = the feature request above. Return the plan file path and a short summary.

## Phase 2 — Architecture

Launch a `general-purpose` Agent (description "Architecture review"). Prompt: read `.claude/commands/architecture.md` and follow it exactly as the Architect (no code), with `$ARGUMENTS` = the plan path from Phase 1. Return the verdict, key changes and test case count.

If the verdict is **Blocked**, show the reasons and decisions needed to the developer and stop.

## Phase 3 — Approval gate + Build

1. Read the plan file yourself. Show a short summary (goal, files, test cases, architecture verdict, plan path).
2. Use `AskUserQuestion`: "Proceed with building this plan?" — **Yes** / **No** / **Revise**.
   - **No** → set Status `Rejected` in the plan, add a Revision Log entry, stop.
   - **Revise** → gather the requested changes, update the plan (keep the template, adjust Test Cases, log the revision), then re-run Phase 2 on the revised plan and ask again.
   - **Yes** → set Status `Approved`.
3. Launch a `general-purpose` Agent (description "Build feature"). Prompt: read `.claude/commands/build.md` and follow it as the Laravel Developer with `$ARGUMENTS` = the plan path, **skipping section 1 (the plan is already approved)**. Return files changed, test results and deviations.

## Phase 4 — Review

Launch a `general-purpose` Agent (description "Review feature"). Prompt: read `.claude/commands/review.md` and follow it exactly as the Reviewer, with `$ARGUMENTS` = the plan path. The full test suite must end green. Return findings and the final test summary.

If the reviewer could not get the suite green or needs a product decision, report that to the developer and stop. Don't claim success.

## Final report

Keep it concise: plan path, final status, files changed, findings fixed or outstanding, and the final full-suite test result. Ask whether the developer wants it committed. Don't commit without being asked.

---
description: Act as the project planner — write an implementation plan to .claude/plans/
argument-hint: <what you want to implement>
---

# Role: Planner

You are the **planner** for this Laravel 12 / Livewire 4 / Volt / Flux UI / Tailwind v4 portfolio app. You produce a plan file. You do **not** write or edit application code or tests.

Feature request: **$ARGUMENTS**

If the request is empty, ask the developer what they want to implement and stop.

## Steps

1. **Explore.** If `graphify-out/graph.json` exists, run `graphify query "<question>"` first. Then read the sibling files you'd touch:
   - Routes: `routes/web.php`, `routes/auth.php` (named routes, `Volt::route()` for Volt pages)
   - Volt pages: `resources/views/livewire/**` (class-based `new class extends Component`)
   - Views/components: `resources/views/welcome.blade.php`, `resources/views/components/**`, `resources/views/flux/**`, `resources/views/partials/**`
   - Models/data: `app/Models`, `database/migrations`, `database/factories`, `database/seeders`
   - Tests: `tests/Feature/**` (PHPUnit classes, `RefreshDatabase`, `Volt::test()`)
2. **Check docs.** Use the Boost `search-docs` tool (with a `packages` array, several broad queries) for every framework API the plan relies on. Use `database-schema` before planning migrations.
3. **Check reuse.** Identify existing components, layouts, factories/states and actions to reuse.
4. **Write the plan file** to `.claude/plans/<YYYY-MM-DD>-<kebab-slug>.md` (today's date, short slug from the request). If the file exists, append `-2`, `-3`, …

## Plan file template

```markdown
# <Feature title>

- **Status:** Draft
- **Created:** <YYYY-MM-DD>
- **Request:** <original request>

## Goal
<one or two sentences>

## Approach
<chosen design and why; one rejected alternative only if non-obvious>

## Files
| Path | New/Modify | Change | Artisan command |
| --- | --- | --- | --- |

## Data
<migrations (restate all prior attributes when modifying a column), models with casts(), factories, seeders — or "None">

## Routes
<named routes + middleware — or "None">

## UI
<Flux components, Tailwind v4 utilities, responsive/dark-mode notes, skills to activate — or "None">

## Test Cases
| # | Test class::method | Type (happy/failure/edge) | Asserts |
| --- | --- | --- | --- |

## Risks & Open Questions
<security, N+1, frontend rebuild needed, anything needing dev input>

## Architecture Review
_Pending — run `/architecture`._

## Revision Log
- <YYYY-MM-DD> — Draft created.
```

## Rules

- Follow the Laravel Boost guidelines in `CLAUDE.md` / `AGENTS.md`.
- New files must be created with `php artisan make:* --no-interaction` (tests: `make:test --phpunit`).
- Never plan new dependencies or new top-level folders without flagging them as needing approval.
- Reply concisely: the plan path, a 3–5 line summary, and the next step (`/architecture <plan path>`).

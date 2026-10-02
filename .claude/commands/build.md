---
description: Act as a Laravel developer — get plan approval (yes/no/revise), then implement it with tests
argument-hint: [plan file path — defaults to the newest in .claude/plans]
---

# Role: Laravel Developer

You are a **Laravel developer** on this Laravel 12 / Livewire 4 / Volt / Flux UI / Tailwind v4 app.

Plan: **$ARGUMENTS** — if empty, use the newest `.md` file in `.claude/plans/`. If none exists, tell the developer to run `/plan <feature>` first and stop.

## 1. Approval gate (required)

1. Read the plan and show the developer a short summary: goal, files table, test cases count, architecture verdict, and the plan path so they can open it. If **Status** is still `Draft`, note that `/architecture` hasn't run.
2. Ask with the `AskUserQuestion` tool — question "Proceed with building this plan?", options:
   - **Yes** — build it as written
   - **No** — stop without changes
   - **Revise** — change the plan first
3. Handle the answer:
   - **No** → set Status to `Rejected`, add a Revision Log entry, stop.
   - **Revise** → collect the requested changes (use their notes/"Other" text, or ask), update the plan file (keep the template; adjust Test Cases if behaviour changes; add a Revision Log entry), then ask again. Repeat until Yes or No.
   - **Yes** → set Status to `Approved`, continue.

## 2. Implement

- Activate skills: `laravel-best-practices` (PHP), `volt-development` (Volt/Livewire), `fluxui-development` (`<flux:*>`), `tailwindcss-development` (styling).
- Use `search-docs` before each framework API; `database-schema` before migrations.
- Scaffold with `php artisan make:* --no-interaction` (`make:test --phpunit`, `make:volt <name> --class`, `make:class`). Check siblings for structure and naming.
- PHP: curly braces, constructor promotion, explicit param/return types, TitleCase enums, PHPDoc with array shapes, descriptive names. Models: `casts()`, factory + seeder.
- Named routes + `route()`; Flux components first; Tailwind v4 utilities; dark-mode/responsive parity with siblings.
- Write **every** test in the plan's Test Cases table as PHPUnit (never Pest), using factories and `Volt::test()`.
- Do not add dependencies, new base folders, docs files, or throwaway tinker/verification scripts. Never delete tests without approval.

## 3. Verify

1. `vendor/bin/pint --dirty --format agent`
2. `php artisan test --compact` filtered to the affected tests/files — fix until green.
3. `graphify update .`
4. If UI changes don't show, ask the dev to run `npm run dev` / `composer run dev` (or run `npm run build` for a Vite manifest error).
5. Set plan Status to `Built`, add a Revision Log entry listing files changed and any deviations from the plan.

Reply concisely: files changed, tests run with results, deviations, next step (`/review <plan path>`).

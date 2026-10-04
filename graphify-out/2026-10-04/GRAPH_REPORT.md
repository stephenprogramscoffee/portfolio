# Graph Report - portfolio-web  (2026-10-04)

## Corpus Check
- 176 files · ~189,705 words
- Verdict: corpus is large enough that graph structure adds value.
- Unclassified: 23 file(s) not represented in the graph (top: (none) 18, .graphify-bak 1, .example 1)

## Summary
- 838 nodes · 890 edges · 126 communities (53 shown, 73 thin omitted)
- Extraction: 94% EXTRACTED · 6% INFERRED · 0% AMBIGUOUS · INFERRED: 57 edges (avg confidence: 0.83)
- Token cost: 0 input · 0 output

## Graph Freshness
- Built from commit: `a7553bb4`
- Run `git rev-parse HEAD` and compare to check if the graph is stale.
- Run `graphify update .` after code changes (no API cost).

## Community Hubs (Navigation)
- User
- composer.json
- Eloquent Best Practices
- Quick Reference
- graphify skill (/graphify)
- Tailwind CSS Development
- package.json
- Illuminate\Database\Schema\Blueprint
- Flux UI Development Skill
- ExampleTest
- Flux UI Development Skill
- Database Performance Best Practices
- VerifyEmailController.php
- Database Performance Best Practices
- Security Best Practices
- UserFactory.php
- Queue & Job Best Practices
- Events & Notifications Best Practices
- Laravel Boost guidelines (AGENTS.md)
- Architecture Best Practices
- Laravel Best Practices Skill
- Pin footer to page bottom; vertically center hero text
- Laravel Best Practices Skill
- HTTP Client Best Practices
- Events & Notifications Best Practices
- Advanced Query Patterns
- Routing & Controllers Best Practices
- Events & Notifications Best Practices
- Queue & Job Best Practices
- Security Best Practices
- Architecture Best Practices
- Architecture Best Practices
- Security Best Practices
- TestCase
- Flux UI Development
- Queue & Job Best Practices
- Advanced Query Patterns
- laravel-boost
- Database Performance Best Practices
- bootstrap/app.php
- Caching Best Practices
- Collection Best Practices
- Logout.php
- Caching Best Practices
- Eloquent Best Practices
- Error Handling Best Practices
- Eloquent Best Practices
- Error Handling Best Practices
- laravel-boost
- verify-email.blade.php
- laravel-boost
- Sidemenu Toggle Icon
- profile.blade.php
- GitHub Icon (50x50 SVG, gray circle with Octocat mark)
- Accent Green #ADFFBF
- Circular Social Badge Style (#D9D9D9 circle, #4D463B glyph, 50x50)
- White Crumpled Paper Texture (Hero Background)
- header.blade.php
- sidebar.blade.php
- card.blade.php
- simple.blade.php
- split.blade.php
- appearance.blade.php
- password.blade.php
- welcome.blade.php
- robots.txt allow all crawlers
- app.js
- PasswordResetTest.php
- Caching Best Practices
- Migration Best Practices
- Volt Development
- Blade & Views Best Practices
- Error Handling Best Practices
- Task Scheduling Best Practices
- Testing Best Practices
- EmailVerificationTest.php
- Feature Pipeline
- Collection Best Practices
- HTTP Client Best Practices
- Mail Best Practices
- Routing & Controllers Best Practices
- Conventions & Style
- Validation & Forms Best Practices
- Role: Prompt Engineer
- Configuration Best Practices
- Role: Planner
- Illuminate\Foundation\Testing\RefreshDatabase
- AuthenticationTest
- DatabaseSeeder.php

## God Nodes (most connected - your core abstractions)
1. `User` - 36 edges
2. `Laravel Best Practices Skill` - 21 edges
3. `Laravel Best Practices Skill` - 21 edges
4. `TestCase` - 20 edges
5. `Quick Reference` - 20 edges
6. `graphify skill (/graphify)` - 15 edges
7. `Pin footer to page bottom; vertically center hero text` - 12 edges
8. `Architecture Best Practices` - 11 edges
9. `Security Best Practices` - 11 edges
10. `ExampleTest` - 10 edges

## Surprising Connections (you probably didn't know these)
- `Follow Laravel Naming Conventions` --references--> `User`  [INFERRED]
  .claude/skills/laravel-best-practices/rules/style.md → app/Models/User.php
- `Rely on Event Discovery` --references--> `AppServiceProvider`  [INFERRED]
  .claude/skills/laravel-best-practices/rules/events-notifications.md → app/Providers/AppServiceProvider.php
- `No Queries In Blade` --conceptually_related_to--> `Blade & Views Best Practices`  [INFERRED]
  .cursor/skills/laravel-best-practices/rules/db-performance.md → .cursor/skills/laravel-best-practices/rules/blade-views.md
- `Run Pint before finalizing` --conceptually_related_to--> `Laravel Pint code style`  [INFERRED]
  AGENTS.md → .github/workflows/lint.yml
- `Test enforcement (PHPUnit, every change tested)` --conceptually_related_to--> `PHPUnit test run (SQLite, PHP 8.4, Node 22)`  [INFERRED]
  AGENTS.md → .github/workflows/tests.yml

## Import Cycles
- None detected.

## Hyperedges (group relationships)
- **graphify build pipeline steps** — _claude_skills_graphify_skill_step1_install, _claude_skills_graphify_skill_step2_detect, _claude_skills_graphify_skill_step3_extract, _claude_skills_graphify_skill_step4_build, _claude_skills_graphify_skill_step4_5_health, _claude_skills_graphify_skill_step5_label [EXTRACTED 1.00]
- **Concurrency & Overlap Control** — _cursor_skills_laravel_best_practices_rules_architecture_atomic_locks_for_race_conditions, _cursor_skills_laravel_best_practices_rules_queue_jobs_shouldbeunique, _cursor_skills_laravel_best_practices_rules_scheduling_withoutoverlapping, _cursor_skills_laravel_best_practices_rules_scheduling_ononeserver [INFERRED 0.75]
- **Concurrency/Duplicate-Execution Control** — _agents_skills_laravel_best_practices_rules_architecture_atomic_locks, _agents_skills_laravel_best_practices_rules_queue_jobs_shouldbeunique, _agents_skills_laravel_best_practices_rules_scheduling_withoutoverlapping, _agents_skills_laravel_best_practices_rules_scheduling_ononeserver [INFERRED 0.75]
- **CI quality gates (Pint + PHPUnit)** — _github_workflows_lint_linter_workflow, _github_workflows_tests_tests_workflow, _github_workflows_lint_laravel_pint, _github_workflows_tests_phpunit_run [INFERRED 0.85]
- **Merge consistency safeguards** — _claude_skills_graphify_references_extraction_spec_node_id_format, _claude_skills_graphify_references_extraction_spec_source_file_rule, _claude_skills_graphify_references_update_build_merge, _claude_skills_graphify_references_update_manifest [INFERRED 0.85]
- **After-Commit Dispatch Safety in Transactions** — _agents_skills_laravel_best_practices_rules_events_notifications_shoulddispatchaftercommit, _agents_skills_laravel_best_practices_rules_mail_mail_aftercommit, _agents_skills_laravel_best_practices_rules_events_notifications_queue_notifications, _agents_skills_laravel_best_practices_rules_mail_mailable_shouldqueue [INFERRED 0.85]
- **Livewire Frontend Skill Stack (Flux, Volt, Tailwind)** — _agents_skills_fluxui_development_skill_fluxui_development, _agents_skills_volt_development_skill_volt_development, _agents_skills_tailwindcss_development_skill_tailwindcss_development [INFERRED 0.85]
- **Frontend UI Skill Stack (Volt/Flux/Tailwind)** — _cursor_skills_fluxui_development_skill_flux_ui_development_skill, _cursor_skills_tailwindcss_development_skill_tailwind_css_development_skill, _cursor_skills_volt_development_skill_volt_development_skill [INFERRED 0.85]
- **Transaction-Safe Dispatch (afterCommit)** — _cursor_skills_laravel_best_practices_rules_events_notifications_shoulddispatchaftercommit, _cursor_skills_laravel_best_practices_rules_events_notifications_aftercommit_in_transactions, _cursor_skills_laravel_best_practices_rules_mail_queued_mailables_shouldqueue [INFERRED 0.85]

## Communities (126 total, 73 thin omitted)

### Community 0 - "User"
Cohesion: 0.18
Nodes (3): User, PasswordConfirmationTest, ProfileUpdateTest

### Community 1 - "composer.json"
Cohesion: 0.04
Nodes (47): pestphp/pest-plugin, php-http/discovery, autoload, autoload-dev, psr-4, psr-4, config, allow-plugins (+39 more)

### Community 2 - "Eloquent Best Practices"
Cohesion: 0.09
Nodes (18): Role: Architect, Steps, 1. Approval gate (required), 2. Implement, 3. Verify, Role: Laravel Developer, Output, Role: Reviewer (+10 more)

### Community 3 - "Quick Reference"
Cohesion: 0.09
Nodes (22): 10. Routing & Controllers → `rules/routing.md`, 11. HTTP Client → `rules/http-client.md`, 12. Events, Notifications & Mail → `rules/events-notifications.md`, `rules/mail.md`, 13. Error Handling → `rules/error-handling.md`, 14. Task Scheduling → `rules/scheduling.md`, 15. Architecture → `rules/architecture.md`, 16. Migrations → `rules/migrations.md`, 17. Collections → `rules/collections.md` (+14 more)

### Community 4 - "graphify skill (/graphify)"
Cohesion: 0.09
Nodes (23): Project graphify skill registration, graphify add URL and --watch folder, Extra exports (wiki, Neo4j, FalkorDB, SVG, GraphML, MCP), graphify MCP server export, Token reduction benchmark, Extraction subagent prompt, GitHub clone and cross-repo merge, Native CLAUDE.md integration (+15 more)

### Community 5 - "Tailwind CSS Development"
Cohesion: 0.14
Nodes (13): Basic Usage, Common Patterns, Common Pitfalls, CSS-First Configuration, Dark Mode, Documentation, Flexbox Layout, Grid Layout (+5 more)

### Community 6 - "package.json"
Cohesion: 0.07
Nodes (27): dependencies, autoprefixer, axios, concurrently, laravel-vite-plugin, tailwindcss, @tailwindcss/vite, vite (+19 more)

### Community 7 - "Illuminate\Database\Schema\Blueprint"
Cohesion: 0.16
Nodes (8): {closure#1}(), {closure#2}(), {closure#3}(), {closure#1}(), {closure#2}(), {closure#1}(), {closure#2}(), {closure#3}()

### Community 8 - "Flux UI Development Skill"
Cohesion: 0.12
Nodes (17): Flux UI Components (Free Edition), Flux Form Field Pattern, Heroicons/Lucide Icon Integration, Flux Modal Pattern, Flux UI Development Skill, Prefer Blade Components Over @include, Laravel Naming Conventions, No Inline JS/CSS in Blade (+9 more)

### Community 10 - "Flux UI Development Skill"
Cohesion: 0.16
Nodes (3): Flux UI Development Skill, Tailwind CSS Development Skill, Volt Development Skill

### Community 11 - "Database Performance Best Practices"
Cohesion: 0.15
Nodes (3): Advanced Query Patterns, Database Performance Best Practices, Migration Best Practices

### Community 13 - "Database Performance Best Practices"
Cohesion: 0.17
Nodes (10): Blade & Views Best Practices, View Composers, #[CollectedBy] Custom Collections, Collection Best Practices, cursor() vs lazy(), Chunk Large Datasets, Database Performance Best Practices, Eager Load Relationships (N+1) (+2 more)

### Community 14 - "Security Best Practices"
Cohesion: 0.15
Nodes (3): Configuration Best Practices, Security Best Practices, Validation & Forms Best Practices

### Community 18 - "Laravel Boost guidelines (AGENTS.md)"
Cohesion: 0.24
Nodes (8): Flux UI composer credentials, Laravel Pint code style, GitHub Actions linter workflow, PHPUnit test run (SQLite, PHP 8.4, Node 22), GitHub Actions tests workflow, Laravel Boost guidelines (AGENTS.md), Laravel 12 / Livewire 4 / Volt / Flux / Tailwind 4 stack, Laravel Boost guidelines (CLAUDE.md)

### Community 19 - "Architecture Best Practices"
Cohesion: 0.22
Nodes (8): Architecture Best Practices, Atomic Locks for Race Conditions, Concurrency::run() Parallel Execution, defer() for Post-Response Work, Dependency Injection, ShouldBeUnique, Task Scheduling Best Practices, withoutOverlapping()

### Community 20 - "Laravel Best Practices Skill"
Cohesion: 0.22
Nodes (8): App::environment() Checks, Configuration Best Practices, env() Only in Config Files, Event::fake() After Factory Setup, Factory States and Sequences, LazilyRefreshDatabase, Testing Best Practices, Laravel Best Practices Skill

### Community 21 - "Pin footer to page bottom; vertically center hero text"
Cohesion: 0.15
Nodes (12): Approach, Architecture Review, Code Review, Data, Files, Goal, Pin footer to page bottom; vertically center hero text, Revision Log (+4 more)

### Community 22 - "Laravel Best Practices Skill"
Cohesion: 0.25
Nodes (3): Blade & Views Best Practices, Conventions & Style, Laravel Best Practices Skill

### Community 24 - "Events & Notifications Best Practices"
Cohesion: 0.12
Nodes (11): AppServiceProvider, VoltServiceProvider, Always Queue Notifications, Events & Notifications Best Practices, Implement `HasLocalePreference` on Notifiable Models, Rely on Event Discovery, Route Notification Channels to Dedicated Queues, Run `event:cache` in Production Deploy (+3 more)

### Community 25 - "Advanced Query Patterns"
Cohesion: 0.25
Nodes (8): addSelect() Subqueries, Advanced Query Patterns, Compound Indexes Matching orderBy, Conditional Aggregates, constrained() Foreign Keys, Add Indexes in Migration, Migration Best Practices, Never Modify Deployed Migrations

### Community 26 - "Routing & Controllers Best Practices"
Cohesion: 0.25
Nodes (8): Single-Purpose Action Classes, Resource Controllers, Implicit Route Model Binding, Routing & Controllers Best Practices, Keep Controllers Thin, Form Request Classes, Rule::when() Conditional Validation, Validation & Forms Best Practices

### Community 27 - "Events & Notifications Best Practices"
Cohesion: 0.32
Nodes (8): Event Discovery, Events & Notifications Best Practices, Always Queue Notifications, ShouldDispatchAfterCommit, assertQueued() for Queued Mailables, Mail Best Practices, afterCommit() on Mailables, ShouldQueue on Mailables

### Community 28 - "Queue & Job Best Practices"
Cohesion: 0.25
Nodes (7): Explicit Timeouts, HTTP Client Best Practices, Fake HTTP Calls in Tests, Retry with Backoff, Exponential Backoff, Queue & Job Best Practices, retry_after > timeout

### Community 29 - "Security Best Practices"
Cohesion: 0.25
Nodes (8): Authorize Every Action, CSRF Protection, Mass Assignment Protection, Rate Limit Auth and API Routes, Security Best Practices, Prevent SQL Injection, Escape Output to Prevent XSS, Always Use validated()

### Community 31 - "Architecture Best Practices"
Cohesion: 0.17
Nodes (11): Architecture Best Practices, Code to Interfaces, Convention Over Configuration, Default Sort by Descending, Single-Purpose Action Classes, Use Atomic Locks for Race Conditions, Use `Concurrency::run()` for Parallel Execution, Use `Context` for Request-Scoped Data (+3 more)

### Community 32 - "Security Best Practices"
Cohesion: 0.17
Nodes (11): Audit Dependencies, Authorize Every Action, CSRF Protection, Encrypt Sensitive Database Fields, Escape Output to Prevent XSS, Keep Secrets Out of Code, Mass Assignment Protection, Prevent SQL Injection (+3 more)

### Community 34 - "Flux UI Development"
Cohesion: 0.18
Nodes (10): Available Components (Free Edition), Basic Usage, Common Patterns, Common Pitfalls, Documentation, Flux UI Development, Form Fields, Icons (+2 more)

### Community 35 - "Queue & Job Best Practices"
Cohesion: 0.18
Nodes (10): Always Implement `failed()`, Batch Related Jobs, Implement `ShouldBeUnique`, Queue & Job Best Practices, Rate Limit External API Calls in Jobs, `retryUntil()` Needs `$tries = 0`, Set `retry_after` Greater Than `timeout`, Use Exponential Backoff (+2 more)

### Community 36 - "Advanced Query Patterns"
Cohesion: 0.20
Nodes (9): Advanced Query Patterns, Create Dynamic Relationships via Subquery FK, Prefer `whereIn` + Subquery Over `whereHas`, Sometimes Two Simple Queries Beat One Complex Query, Use `addSelect()` Subqueries for Single Values from Has-Many, Use Compound Indexes Matching `orderBy` Column Order, Use Conditional Aggregates Instead of Multiple Count Queries, Use Correlated Subqueries for Has-Many Ordering (+1 more)

### Community 37 - "laravel-boost"
Cohesion: 0.29
Nodes (6): command, enabled, type, mcp, laravel-boost, $schema

### Community 38 - "Database Performance Best Practices"
Cohesion: 0.20
Nodes (9): Add Database Indexes, Always Eager Load Relationships, Chunk Large Datasets, Database Performance Best Practices, No Queries in Blade Templates, Prevent Lazy Loading in Development, Select Only Needed Columns, Use `cursor()` for Memory-Efficient Iteration (+1 more)

### Community 44 - "Caching Best Practices"
Cohesion: 0.50
Nodes (3): Cache::flexible() Stale-While-Revalidate, Caching Best Practices, once() Per-Request Memoization

### Community 45 - "Eloquent Best Practices"
Cohesion: 0.67
Nodes (4): Attribute Casts, Eloquent Best Practices, Global Scopes Sparingly, Local Scopes

### Community 46 - "Error Handling Best Practices"
Cohesion: 0.50
Nodes (4): Error Handling Best Practices, Exception Reporting and Rendering, Force JSON Error Rendering for API, ShouldntReport

### Community 53 - "Sidemenu Toggle Icon"
Cohesion: 0.67
Nodes (3): Navy Brand Color #1C1B45, Sidemenu Toggle Icon, Asymmetric Two-Line Hamburger Menu Pattern

### Community 104 - "Caching Best Practices"
Cohesion: 0.22
Nodes (8): Caching Best Practices, Configure Failover Cache Stores in Production, Use `Cache::add()` for Atomic Conditional Writes, Use `Cache::flexible()` for Stale-While-Revalidate, Use `Cache::memo()` to Avoid Redundant Hits Within a Request, Use `Cache::remember()` Instead of Manual Get/Put, Use Cache Tags to Invalidate Related Groups, Use `once()` for Per-Request Memoization

### Community 105 - "Migration Best Practices"
Cohesion: 0.22
Nodes (8): Add Indexes in the Migration, Generate Migrations with Artisan, Keep Migrations Focused, Migration Best Practices, Mirror Defaults in Model `$attributes`, Never Modify Deployed Migrations, Use `constrained()` for Foreign Keys, Write Reversible `down()` Methods by Default

### Community 106 - "Volt Development"
Cohesion: 0.22
Nodes (8): Basic Usage, Class-Based Components, Common Pitfalls, Documentation, Functional Components, Testing, Verification, Volt Development

### Community 107 - "Blade & Views Best Practices"
Cohesion: 0.25
Nodes (7): Blade & Views Best Practices, Prefer Blade Components Over `@include`, Use `$attributes->merge()` in Component Templates, Use `@aware` for Deeply Nested Component Props, Use Blade Fragments for Partial Re-Renders (htmx/Turbo), Use `@pushOnce` for Per-Component Scripts, Use View Composers for Shared View Data

### Community 108 - "Error Handling Best Practices"
Cohesion: 0.25
Nodes (7): Add Context to Exception Classes, Enable `dontReportDuplicates()`, Error Handling Best Practices, Exception Reporting and Rendering, Force JSON Error Rendering for API Routes, Throttle High-Volume Exceptions, Use `ShouldntReport` for Exceptions That Should Never Log

### Community 109 - "Task Scheduling Best Practices"
Cohesion: 0.25
Nodes (7): Task Scheduling Best Practices, Use `environments()` to Restrict Tasks, Use `onOneServer()` on Multi-Server Deployments, Use `runInBackground()` for Concurrent Long Tasks, Use Schedule Groups for Shared Configuration, Use `takeUntilTimeout()` for Time-Bounded Processing, Use `withoutOverlapping()` on Variable-Duration Tasks

### Community 110 - "Testing Best Practices"
Cohesion: 0.25
Nodes (7): Call `Event::fake()` After Factory Setup, Testing Best Practices, Use `Exceptions::fake()` to Assert Exception Reporting, Use Factory States and Sequences, Use `LazilyRefreshDatabase` Over `RefreshDatabase`, Use Model Assertions Over Raw Database Assertions, Use `recycle()` to Share Relationship Instances Across Factories

### Community 112 - "Feature Pipeline"
Cohesion: 0.29
Nodes (6): Feature Pipeline, Final report, Phase 1 — Plan, Phase 2 — Architecture, Phase 3 — Approval gate + Build, Phase 4 — Review

### Community 113 - "Collection Best Practices"
Cohesion: 0.29
Nodes (6): Choose `cursor()` vs. `lazy()` Correctly, Collection Best Practices, Use `#[CollectedBy]` for Custom Collection Classes, Use Higher-Order Messages for Simple Operations, Use `lazyById()` When Updating Records While Iterating, Use `toQuery()` for Bulk Operations on Collections

### Community 114 - "HTTP Client Best Practices"
Cohesion: 0.29
Nodes (6): Always Set Explicit Timeouts, Fake HTTP Calls in Tests, Handle Errors Explicitly, HTTP Client Best Practices, Use Request Pooling for Concurrent Requests, Use Retry with Backoff for External APIs

### Community 115 - "Mail Best Practices"
Cohesion: 0.29
Nodes (6): Implement `ShouldQueue` on the Mailable Class, Mail Best Practices, Separate Content Tests from Sending Tests, Use `afterCommit()` on Mailables Inside Transactions, Use `assertQueued()` Not `assertSent()` for Queued Mailables, Use Markdown Mailables for Transactional Emails

### Community 116 - "Routing & Controllers Best Practices"
Cohesion: 0.29
Nodes (6): Keep Controllers Thin, Routing & Controllers Best Practices, Type-Hint Form Requests, Use Implicit Route Model Binding, Use Resource Controllers, Use Scoped Bindings for Nested Resources

### Community 117 - "Conventions & Style"
Cohesion: 0.29
Nodes (6): Conventions & Style, Follow Laravel Naming Conventions, No Inline JS/CSS in Blade, No Unnecessary Comments, Prefer Shorter Readable Syntax, Use Laravel String & Array Helpers

### Community 118 - "Validation & Forms Best Practices"
Cohesion: 0.29
Nodes (6): Always Use `validated()`, Array vs. String Notation for Rules, Use Form Request Classes, Use `Rule::when()` for Conditional Validation, Use the `after()` Method for Custom Validation, Validation & Forms Best Practices

### Community 119 - "Role: Prompt Engineer"
Cohesion: 0.33
Nodes (5): 1. Parse the input, 2. Lightweight grounding (keep it cheap), 3. Write the prompt, 4. Output and next step, Role: Prompt Engineer

### Community 120 - "Configuration Best Practices"
Cohesion: 0.33
Nodes (5): Configuration Best Practices, `env()` Only in Config Files, Use `App::environment()` for Environment Checks, Use Constants and Language Files, Use Encrypted Env or External Secrets

### Community 121 - "Role: Planner"
Cohesion: 0.40
Nodes (4): Plan file template, Role: Planner, Rules, Steps

### Community 122 - "Illuminate\Foundation\Testing\RefreshDatabase"
Cohesion: 0.19
Nodes (3): DashboardTest, PasswordUpdateTest, ExampleTest

## Knowledge Gaps
- **335 isolated node(s):** `wsl.exe`, `wsl.exe`, `$schema`, `name`, `type` (+330 more)
  These have ≤1 connection - possible missing edges or undocumented components. (Counts symbols only; 528 node(s) total have ≤1 connection when file, concept and rationale nodes are included.)
- **73 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `User` connect `User` to `TestCase`, `Eloquent Best Practices`, `PasswordResetTest.php`, `EmailVerificationTest.php`, `Conventions & Style`, `Illuminate\Foundation\Testing\RefreshDatabase`, `AuthenticationTest`, `DatabaseSeeder.php`?**
  _High betweenness centrality (0.027) - this node is a cross-community bridge._
- **Why does `Laravel Best Practices Skill` connect `Laravel Best Practices Skill` to `Flux UI Development Skill`, `Caching Best Practices`, `Eloquent Best Practices`, `Database Performance Best Practices`, `Error Handling Best Practices`, `Architecture Best Practices`, `Advanced Query Patterns`, `Routing & Controllers Best Practices`, `Events & Notifications Best Practices`, `Queue & Job Best Practices`, `Security Best Practices`?**
  _High betweenness centrality (0.013) - this node is a cross-community bridge._
- **Why does `Laravel Best Practices Skill` connect `Laravel Best Practices Skill` to `Caching Best Practices`, `Collection Best Practices`, `Database Performance Best Practices`, `Security Best Practices`, `Eloquent Best Practices`, `Error Handling Best Practices`, `Events & Notifications Best Practices`, `Queue & Job Best Practices`, `HTTP Client Best Practices`, `Architecture Best Practices`?**
  _High betweenness centrality (0.010) - this node is a cross-community bridge._
- **What connects `wsl.exe`, `wsl.exe`, `$schema` to the rest of the system?**
  _335 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `composer.json` be split into smaller, more focused modules?**
  _Cohesion score 0.041666666666666664 - nodes in this community are weakly interconnected._
- **Should `Eloquent Best Practices` be split into smaller, more focused modules?**
  _Cohesion score 0.08695652173913043 - nodes in this community are weakly interconnected._
- **Should `Quick Reference` be split into smaller, more focused modules?**
  _Cohesion score 0.08695652173913043 - nodes in this community are weakly interconnected._
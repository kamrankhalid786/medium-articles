---
title: "Stop writing try/catch like this (Laravel) — a practical guide"
description: "Why catching everything is an anti-pattern and how to structure error handling in Laravel-style apps (teaching adaptation)."
author: Kamran Khalid
tags: [php, laravel, testing, teaching]
---

Summary
-------
This short, classroom-friendly adaptation is based on the ideas in "Stop writing try/catch like this in Laravel" (link below). It explains the common anti-pattern of broadly-catching exceptions, shows a safer, testable approach, and includes a small, runnable example with tests.

Original: https://medium.com/stackademic/stop-writing-try-catch-like-this-in-laravel-f8886da384c7

Why this matters
-----------------
- Broad `catch (\Throwable $e)` blocks often *swallow* bugs and make failures silent.
- Proper exception design and letting framework-level handlers report/render errors gives clearer telemetry and easier testing.

Anti-pattern (what students often write)
---------------------------------------
```php
// examples/laravel-exception-handling/src/BadHandler.php
public function process(array $data): bool
{
    try {
        $this->doWork($data);
        return true;
    } catch (\Throwable $e) {
        // swallow or return false — hides real problems
        return false;
    }
}
```

Safer pattern (testable + explicit)
-----------------------------------
- Validate input early and throw specific exceptions
- Let the framework's exception handler report the error
- Catch only where you can *recover*

```php
// examples/laravel-exception-handling/src/GoodHandler.php
public function process(array $data): bool
{
    $this->validate($data); // throws InvalidArgumentException
    $this->doWork($data);   // may throw DomainException on business rules
    return true;
}
```

Exercises
---------
- Refactor `BadHandler` into `GoodHandler` and add tests that assert exceptions are thrown for invalid input.
- Add a `report()` wrapper and a small integration test that simulates framework behaviour.

Instructor notes
----------------
- Run the unit tests to show the failing -> passing TDD cycle.
- Use the intentionally-failing test (in `examples/.../tests/`) as a teaching moment.

Resources
---------
- Original article (summary & deeper rationale): <https://medium.com/stackademic/stop-writing-try-catch-like-this-in-laravel-f8886da384c7>
- Suggested classroom activity: convert an existing controller method that swallows errors into explicit, testable flow.

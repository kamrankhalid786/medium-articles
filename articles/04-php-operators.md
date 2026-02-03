---
title: "7 PHP operators every pro should master (plain PHP)"
description: "Concise, plain-PHP explanations and runnable examples for seven operators you will use every day."
author: Kamran Khalid
tags: [php, examples, teaching]
---

Summary
-------
This article condenses the most useful PHP operators (and expressions) you should know and provides small, runnable examples. The focus is **plain PHP** — each example is in `examples/php-operators/` with unit tests so you can run them locally.

Why these matter
----------------
- They make common patterns concise and expressive.
- Knowing them avoids verbose code and subtle bugs (null handling, comparisons, merging arrays, etc.).

Operators covered
-----------------
1. Null coalescing (`??`)
2. Null coalescing assignment (`??=`)
3. Nullsafe operator (`?->`)
4. Spaceship operator (`<=>`)
5. Array spread / unpacking (`...`)
6. Ternary / shorthand ternary (`?:`)
7. `match` expression (concise, type-safe replacement for switch)

Examples (quick)
-----------------
- See `examples/php-operators/src/Operators.php` for tiny, copy-pasteable functions.
- Run the examples' tests:

```bash
cd examples/php-operators
composer install --no-interaction
vendor/bin/phpunit
```

Short walkthrough
-----------------
- `??` - use when a value may be null or undefined (safer than `isset` + ternary).
- `??=` - assign a default only when the variable is null (useful for defaults).
- `?->` - safely traverse potentially-null objects without verbose guards.
- `<=>` - compact three-way comparison useful in sorting and comparator functions.
- `...` - merge arrays or forward variadic args; clearer and often faster than array_merge.
- `?:` - shorthand ternary for a common fallback pattern.
- `match` - expression that returns values and doesn't fall through like `switch`.

Exercises
---------
- Replace verbose null checks in an existing code sample with `??` / `??=`.
- Write a comparator using `<=>` and sort mixed values in tests.
- Convert a `switch` with returns into a `match` expression and add tests.

Resources
---------
- Original inspiration: https://medium.com/stackademic/7-php-operators-every-laravel-pro-should-master-64402b48f457
- PHP docs: null coalescing, nullsafe, spaceship, spread, match

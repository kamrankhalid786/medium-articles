PHP exception-handling (teaching example)

Quickstart
---------
# from repository root
cd examples/php-exception-handling
composer install --no-interaction --prefer-dist
vendor/bin/phpunit -c phpunit.xml

What you'll see
---------------
- `src/BadHandler.php` — an anti-pattern that swallows exceptions
- `src/GoodHandler.php` — a clearer, testable approach
- `tests/` — unit tests demonstrating both behaviours

Classroom ideas
---------------
- Ask students to replace `BadHandler` with `GoodHandler` in a controller-like wrapper.
- Add an integration test that asserts the framework would report the error (mock the reporter).
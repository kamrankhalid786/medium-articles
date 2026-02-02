# medium-articles — teaching examples for Kamran Khalid

This repository contains Medium-style article examples, runnable code, notebooks and student exercises designed for classroom sessions.

## What you'll find ✅
- `articles/` — Medium-style Markdown articles with exercises
- `examples/` — runnable code (Python + JavaScript) with tests
- `notebooks/` — interactive Jupyter demos (Colab-ready)
- `docs/` — MkDocs site to preview articles locally / deploy to GitHub Pages

## Quickstart (for students) ▶️

[![starter branch](https://img.shields.io/badge/branch-starter-blue?logo=github)](https://github.com/kamrankhalid786/medium-articles/tree/starter)  
[![download starter zip](https://img.shields.io/badge/download-starter.zip-brightgreen?logo=github)](https://github.com/kamrankhalid786/medium-articles/archive/refs/heads/starter.zip)

Option A — recommended (students): clone the **starter** branch directly
```bash
# clone only the starter branch (fast, student-ready)
git clone --branch starter --single-branch https://github.com/kamrankhalid786/medium-articles.git
cd medium-articles
```

Option B — clone full repo and switch to starter
```bash
git clone https://github.com/kamrankhalid786/medium-articles.git
cd medium-articles
git checkout starter
```

Run an example (Python)
```bash
cd examples/intro-python
python -m venv .venv && . .venv/bin/activate
pip install -r requirements.txt
pytest -q
```

Run an example (JavaScript)
```bash
cd examples/intro-js
npm install
npm test
```

Run the PHP example (if you have PHP + composer)
```bash
cd examples/php-exception-handling
composer install --no-interaction --prefer-dist
vendor/bin/phpunit -c phpunit.xml
```

## Instructor notes
- Each article in `articles/` links to a runnable example in `examples/` and an interactive notebook in `notebooks/`.
- Use GitHub Classroom or create starter branches for student assignments.

## Contributing
See `CONTRIBUTING.md` for how to add articles, examples and exercises.

---
Published author: https://medium.com/@kamrankhalid06

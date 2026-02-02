# medium-articles — teaching examples for Kamran Khalid

This repository contains Medium-style article examples, runnable code, notebooks and student exercises designed for classroom sessions.

## What you'll find ✅
- `articles/` — Medium-style Markdown articles with exercises
- `examples/` — runnable code (Python + JavaScript) with tests
- `notebooks/` — interactive Jupyter demos (Colab-ready)
- `docs/` — MkDocs site to preview articles locally / deploy to GitHub Pages

## Quickstart (for students) ▶️
```bash
git clone https://github.com/kamrankhalid786/medium-articles.git
cd medium-articles
# Python example
cd examples/intro-python
python -m venv .venv && . .venv/bin/activate
pip install -r requirements.txt
pytest -q
# JavaScript example
cd ../intro-js
npm install
npm test
```

## Instructor notes
- Each article in `articles/` links to a runnable example in `examples/` and an interactive notebook in `notebooks/`.
- Use GitHub Classroom or create starter branches for student assignments.

## Contributing
See `CONTRIBUTING.md` for how to add articles, examples and exercises.

---
Published author: https://medium.com/@kamrankhalid06

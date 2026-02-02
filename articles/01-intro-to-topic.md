---
title: "Intro — Clean text for data tasks"
description: "A short, practical guide to simple text-normalization in Python (with exercises)."
author: Kamran Khalid
tags: [python, teaching, data]
---

## Why normalise text?
Real-world text is messy. For many data tasks (search, simple NLP, classroom exercises) a small normalization pipeline removes noise and makes examples deterministic.

### Example (fast)
```python
# from: examples/intro-python/solution.py
from solution import normalize_text
print(normalize_text("Hello, WORLD!!!"))  # -> "hello world"
```

### Exercise
- Implement `normalize_text` (see starter in `examples/intro-python/`).
- Add a new test for emojis and for non-ASCII characters.

### Teaching notes
- Run the example (`pytest`) during the session to show TDD feedback.
- Interactive demo: open `notebooks/intro-demo.ipynb` (Colab badge below).

[Open in Colab](https://colab.research.google.com/notebook#create=true) <!-- replace with direct notebook link after upload -->

---

## Further ideas
- Extend the pipeline to tokenization, stopword removal, and n-gram extraction.
- Turn the exercise into a short assignment: add a `--mode` CLI flag and measure processing speed on sample files.

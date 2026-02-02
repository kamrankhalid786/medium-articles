"""Small text-normalisation helpers used by the demo article."""
import re
import unicodedata

WORD_RE = re.compile(r"\w+", flags=re.UNICODE)


def normalize_text(text: str) -> str:
    """Return a deterministic, whitespace-separated, lowercase string.

    - NFC-normalize unicode
    - remove control characters and punctuation
    - collapse whitespace
    """
    if not isinstance(text, str):
        raise TypeError("text must be str")
    # unicode normalisation
    text = unicodedata.normalize("NFC", text)
    # lower
    text = text.lower()
    # keep only word characters and spaces
    words = WORD_RE.findall(text)
    return " ".join(words)


if __name__ == "__main__":
    print(normalize_text("Hello, WORLD!!! 👋"))

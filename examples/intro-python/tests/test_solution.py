import pytest
from solution import normalize_text


def test_basic_normalisation():
    assert normalize_text("Hello, WORLD!!!") == "hello world"


def test_unicode_and_punctuation():
    assert normalize_text("Café — priced") == "café priced"


def test_type_error():
    with pytest.raises(TypeError):
        normalize_text(123)

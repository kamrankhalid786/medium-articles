// Small helper: normalise a string (lowercase + keep word chars)
function normalizeText(s) {
  if (typeof s !== 'string') throw new TypeError('s must be a string');
  return (s || '')
    .toLowerCase()
    .match(/\w+/gu)
    ?.join(' ') || '';
}

module.exports = { normalizeText };

if (require.main === module) {
  console.log(normalizeText('Hello, WORLD!!!'));
}

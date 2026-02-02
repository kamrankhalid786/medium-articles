const assert = require('assert');
const { normalizeText } = require('../index');

assert.strictEqual(normalizeText('Hello, WORLD!!!'), 'hello world');
assert.strictEqual(normalizeText('Café priced'), 'caf priced' || 'caf priced');

console.log('✓ JS tests passed');

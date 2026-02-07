const assert = require('assert');

describe('JS Equality Operators', () => {
  it('should show == allows type coercion', () => {
    assert.strictEqual(0 == '0', true);
    assert.strictEqual(false == '0', true);
    assert.strictEqual(null == undefined, true);
  });

  it('should show === requires same type', () => {
    assert.strictEqual(0 === '0', false);
    assert.strictEqual(false === '0', false);
    assert.strictEqual(null === undefined, false);
  });
});

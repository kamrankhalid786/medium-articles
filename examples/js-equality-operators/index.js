// Example: == vs ===

console.log(0 == '0');      // true
console.log(0 === '0');     // false
console.log(false == '0');  // true
console.log(false === '0'); // false
console.log(null == undefined); // true
console.log(null === undefined); // false

// Recommended: Always use === unless you need type coercion.

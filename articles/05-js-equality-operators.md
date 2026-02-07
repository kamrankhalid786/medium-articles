# Difference Between == and === in JavaScript

> Original article: [Difference Between == and === & What's Better?](https://medium.com/stackademic/difference-between-and-whats-better-dc8b3072664e)

JavaScript provides two comparison operators: `==` (loose equality) and `===` (strict equality). Understanding their differences is crucial for writing bug-free code.

## == (Loose Equality)
- Compares values for equality after converting both values to a common type.
- Example:
  ```js
  0 == '0' // true
  false == '0' // true
  null == undefined // true
  ```
- Can lead to unexpected results due to type coercion.

## === (Strict Equality)
- Compares both value and type, without type conversion.
- Example:
  ```js
  0 === '0' // false
  false === '0' // false
  null === undefined // false
  ```
- Safer and more predictable; recommended for most cases.

## Which Should You Use?
- Prefer `===` for clarity and reliability.
- Use `==` only when intentional type coercion is needed.

## Summary Table
| Expression         | == Result | === Result |
|-------------------|-----------|------------|
| 0 vs '0'          | true      | false      |
| false vs '0'      | true      | false      |
| null vs undefined | true      | false      |

## Further Reading
- [MDN: Equality comparisons and sameness](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Equality_comparisons_and_sameness)

---
*Contributed based on [Stackademic article](https://medium.com/stackademic/difference-between-and-whats-better-dc8b3072664e).*

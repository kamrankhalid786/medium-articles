<?php

namespace MediumArticles\PhpOperators\Tests;

use MediumArticles\PhpOperators\Operators;
use PHPUnit\Framework\TestCase;

class OperatorsTest extends TestCase
{
    public function testCoalesce()
    {
        $this->assertSame('b', Operators::coalesce(null, 'b'));
        $this->assertSame('a', Operators::coalesce('a', 'b'));
    }

    public function testCoalesceAssign()
    {
        $x = null;
        $this->assertSame('def', Operators::coalesceAssign($x, 'def'));
        $this->assertSame('def', $x);

        $y = 'val';
        $this->assertSame('val', Operators::coalesceAssign($y, 'def'));
    }

    public function testNullsafeExample()
    {
        $obj = new class {
            public $child;
        };
        $obj->child = new class { public $name = 'kam'; };

        $this->assertSame('kam', Operators::nullsafeExample($obj));
        $this->assertNull(Operators::nullsafeExample(null));
    }

    public function testSpaceship()
    {
        $this->assertSame(0, Operators::spaceshipCompare(2, 2));
        $this->assertSame(1, Operators::spaceshipCompare(3, 2));
        $this->assertSame(-1, Operators::spaceshipCompare(1, 2));
    }

    public function testSpreadArrays()
    {
        $a = [1, 2];
        $b = [3 => 4, 'x' => 5];
        $merged = Operators::spreadArrays($a, $b);

        $this->assertSame([1, 2, 4, 'x' => 5], $merged);
    }

    public function testTernaryShorthand()
    {
        $this->assertSame('fallback', Operators::ternaryShorthand('', 'fallback'));
        $this->assertSame('value', Operators::ternaryShorthand('value', 'fallback'));
    }

    public function testMatchExample()
    {
        $this->assertSame('zero', Operators::matchExample(0));
        $this->assertSame('one', Operators::matchExample(1));
        $this->assertSame('other', Operators::matchExample(99));
    }
}

<?php

namespace MediumArticles\PhpOperators;

class Operators
{
    public static function coalesce($a, $b)
    {
        // return $a if it's not null, otherwise $b
        return $a ?? $b;
    }

    public static function coalesceAssign(&$value, $default)
    {
        // assign $default to $value only when $value is null
        $value ??= $default;
        return $value;
    }

    public static function nullsafeExample($obj)
    {
        // safe navigation: returns null if $obj or nested property is null
        return $obj?->child?->name ?? null;
    }

    public static function spaceshipCompare($a, $b)
    {
        // returns -1, 0, or 1
        return $a <=> $b;
    }

    public static function spreadArrays(array $a, array $b)
    {
        // merge arrays using spread (keeps keys for non-numeric keys)
        return [...$a, ...$b];
    }

    public static function ternaryShorthand($value, $fallback)
    {
        // shorthand ternary: returns $value if truthy, otherwise $fallback
        return $value ?: $fallback;
    }

    public static function matchExample($input)
    {
        return match ($input) {
            0 => 'zero',
            1 => 'one',
            default => 'other',
        };
    }
}

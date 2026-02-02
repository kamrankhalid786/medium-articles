<?php

declare(strict_types=1);

namespace MediumArticles\ExceptionHandling\Tests;

use MediumArticles\ExceptionHandling\BadHandler;
use PHPUnit\Framework\TestCase;

class BadHandlerTest extends TestCase
{
    public function test_process_returns_false_and_swallows_exception(): void
    {
        $h = new BadHandler();
        $result = $h->process([]);
        $this->assertFalse($result, 'BadHandler should return false when input is invalid (swallowed)');
    }

    public function test_process_returns_false_on_business_error(): void
    {
        $h = new BadHandler();
        $this->assertFalse($h->process(['reject' => true]));
    }
}

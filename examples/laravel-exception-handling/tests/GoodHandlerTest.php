<?php

declare(strict_types=1);

namespace MediumArticles\ExceptionHandling\Tests;

use MediumArticles\ExceptionHandling\GoodHandler;
use PHPUnit\Framework\TestCase;

class GoodHandlerTest extends TestCase
{
    public function test_process_throws_for_missing_data(): void
    {
        $h = new GoodHandler();
        $this->expectException(\InvalidArgumentException::class);
        $h->process([]);
    }

    public function test_process_throws_on_business_rule(): void
    {
        $h = new GoodHandler();
        $this->expectException(\DomainException::class);
        $h->process(['reject' => true]);
    }

    public function test_process_returns_true_for_valid_input(): void
    {
        $h = new GoodHandler();
        $this->assertTrue($h->process(['ok' => true]));
    }
}

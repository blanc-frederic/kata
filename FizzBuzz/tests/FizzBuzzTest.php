<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testStandard(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->translate(2);

        $this->assertSame('2', $result);
    }

    public function testSample(): void
    {
        $this->markTestSkipped();

        $fizzBuzz = new FizzBuzz();

        $result = implode(', ', $fizzBuzz->range(1, 15));

        $expected = '1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, 11, fizz, 13, 14, fizzbuzz';
        $this->assertSame($expected, $result);
    }
}

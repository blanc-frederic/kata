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

    public function testRange(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->range(1, 2);

        $this->assertSame(['1', '2'], $result);
    }

    public function testFizz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->translate(9);

        $this->assertSame('fizz', $result);
    }

    public function testBuzz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->translate(10);

        $this->assertSame('buzz', $result);
    }

    public function testFizzBuzz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->translate(15);

        $this->assertSame('fizzbuzz', $result);
    }

    public function testSample(): void
    {
        $fizzBuzz = new FizzBuzz();

        $result = implode(', ', $fizzBuzz->range(1, 15));

        $expected = '1, 2, fizz, 4, buzz, fizz, 7, 8, fizz, buzz, 11, fizz, 13, 14, fizzbuzz';
        $this->assertSame($expected, $result);
    }
}

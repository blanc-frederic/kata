<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
    /** @return string[] */
    public function range(int $start, int $end): array
    {
        return array_map(
            fn($number) => $this->translate($number),
            range($start, $end)
        );
    }

    public function translate(int $number): string
    {
        $multiple3 = (($number % 3) === 0);
        $multiple5 = (($number % 5) === 0);

        if ($multiple3 && $multiple5) {
            return 'fizzbuzz';
        }

        if ($multiple3) {
            return 'fizz';
        }

        if ($multiple5) {
            return 'buzz';
        }

        return (string) $number;
    }
}

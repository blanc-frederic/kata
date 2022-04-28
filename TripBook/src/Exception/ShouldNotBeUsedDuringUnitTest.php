<?php

declare(strict_types=1);

namespace SandroMancuso\TripServiceKata\Exception;

use RuntimeException;

class ShouldNotBeUsedDuringUnitTest extends RuntimeException
{
    public function __construct(string $subject)
    {
        parent::__construct($subject. ' should not be used on an unit test');
    }
}

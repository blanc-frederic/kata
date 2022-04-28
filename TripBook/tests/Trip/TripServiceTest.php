<?php

declare(strict_types=1);

namespace Trip;

use PHPUnit\Framework\TestCase;
use SandroMancuso\TripServiceKata\Trip\TripService;
use SandroMancuso\TripServiceKata\User\User;

class TripServiceTest extends TestCase
{
    public function testService(): void
    {
        $tripService = new TripService();
        $trips = $tripService->getTripsByUser(new User('John Doe'));
        self::assertEmpty($trips);
    }
}

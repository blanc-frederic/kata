<?php

declare(strict_types=1);

namespace Trip;

use PHPUnit\Framework\TestCase;
use Sandromancuso\TripServiceKata\Trip\TripService;

class TripServiceTest extends TestCase
{
    private TripService $tripService;

    protected function setUp(): void
    {
        $this->tripService = new TripService();
    }

    public function testService(): void
    {
        $this->fail('This test has not been implemented yet.');
    }
}

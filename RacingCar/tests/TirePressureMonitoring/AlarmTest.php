<?php

declare(strict_types=1);

namespace Tests\TirePressureMonitoring;

use PHPUnit\Framework\TestCase;
use RacingCar\TirePressureMonitoring\Alarm;
use RacingCar\TirePressureMonitoring\Sensor;

class AlarmTest extends TestCase
{
    public function testNoAlarm(): void
    {
        $alarm = new Alarm();
        $this->assertFalse($alarm->isAlarmOn());
    }

    public function testTooLowPressure(): void
    {

    }
}

class AlarmWrapper extends Alarm
{
    public function __construct(Sensor $sensor)
    {
        $this->sensor = $sensor;
    }
}

<?php

declare(strict_types=1);

namespace RacingCar\TirePressureMonitoring;

class Alarm
{
    public const LOW_PRESSURE_THRESHOLD = 17;
    public const HIGH_PRESSURE_THRESHOLD = 21;

    protected $sensor;
    protected $isAlarmOn = false;

    public function __construct()
    {
        $this->sensor = new Sensor();
    }

    public function check(): void
    {
        $psiPressureValue = $this->sensor->popNextPressurePsiValue();

        if ($psiPressureValue < self::LOW_PRESSURE_THRESHOLD || $psiPressureValue > self::HIGH_PRESSURE_THRESHOLD) {
            $this->isAlarmOn = true;
        }
    }

    public function isAlarmOn(): bool
    {
        return $this->isAlarmOn;
    }
}

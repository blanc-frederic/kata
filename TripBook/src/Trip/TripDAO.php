<?php

declare(strict_types=1);

namespace SandroMancuso\TripServiceKata\Trip;

use SandroMancuso\TripServiceKata\Exception\ShouldNotBeUsedDuringUnitTest;
use SandroMancuso\TripServiceKata\User\User;

class TripDAO
{
    /** @return Trip[] */
    public static function findTripsByUser(User $user): array
    {
        throw new ShouldNotBeUsedDuringUnitTest(self::class);
    }
}

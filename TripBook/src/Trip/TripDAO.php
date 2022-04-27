<?php

declare(strict_types=1);

namespace Sandromancuso\TripServiceKata\Trip;

use Sandromancuso\TripServiceKata\Exception\DependentClassCalledDuringUnitTestException;
use Sandromancuso\TripServiceKata\User\User;

class TripDAO
{
    /** @return Trip[] */
    public static function findTripsByUser(User $user): array
    {
        throw new DependentClassCalledDuringUnitTestException(
            'TripDAO should not be invoked on an unit test.'
        );
    }
}

<?php

declare(strict_types=1);

namespace SandroMancuso\TripServiceKata\User;

use SandroMancuso\TripServiceKata\Exception\ShouldNotBeUsedDuringUnitTest;

class UserSession
{
    private static ?UserSession $userSession = null;

    public static function getInstance(): self
    {
        if (null === static::$userSession) {
            static::$userSession = new UserSession();
        }

        return static::$userSession;
    }

    public function getLoggedUser(): ?User
    {
        throw new ShouldNotBeUsedDuringUnitTest('UserSession.getLoggedUser()');
    }
}

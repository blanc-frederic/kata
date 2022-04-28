<?php

declare(strict_types=1);

namespace SandroMancuso\TripServiceKata\Trip;

use SandroMancuso\TripServiceKata\Exception\UserNotLoggedInException;
use SandroMancuso\TripServiceKata\User\User;
use SandroMancuso\TripServiceKata\User\UserSession;

class TripService
{
    /** @return Trip[] */
    public function getTripsByUser(User $user): array
    {
        $tripList = array();
        $loggedUser = UserSession::getInstance()->getLoggedUser();
        $isFriend = false;
        if ($loggedUser != null) {
            foreach ($user->getFriends() as $friend) {
                if ($friend == $loggedUser) {
                    $isFriend = true;
                    break;
                }
            }
            if ($isFriend) {
                $tripList = TripDAO::findTripsByUser($user);
            }
            return $tripList;
        } else {
            throw new UserNotLoggedInException();
        }
    }
}

<?php

declare(strict_types=1);

namespace Sandromancuso\TripServiceKata\Trip;

use Sandromancuso\TripServiceKata\Exception\UserNotLoggedInException;
use Sandromancuso\TripServiceKata\User\User;
use Sandromancuso\TripServiceKata\User\UserSession;

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

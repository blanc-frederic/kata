<?php

declare(strict_types=1);

namespace SandroMancuso\TripServiceKata\User;

use SandroMancuso\TripServiceKata\Trip\Trip;

class User
{
    private $trips;
    private $friends;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->trips = array();
        $this->friends = array();
    }

    /** @return Trip[] */
    public function getTrips(): array
    {
        return $this->trips;
    }

    /** @return User[] */
    public function getFriends(): array
    {
        return $this->friends;
    }

    public function addFriend(User $user): void
    {
        $this->friends[] = $user;
    }

    public function addTrip(Trip $trip): void
    {
        $this->trips[] = $trip;
    }
}

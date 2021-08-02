<?php

declare(strict_types=1);

namespace Bowling;

interface GameInterface
{
    /**
     * Indique le résultat d'un lancé
     */
    public function roll(int $pins): void;

    /**
     * Permet d'obtenir le score de la partie
     */
    public function score(): int;
}

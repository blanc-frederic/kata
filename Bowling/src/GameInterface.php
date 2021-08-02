<?php

declare(strict_types=1);

namespace Bowling\Src;

interface GameInterface
{
    public function roll(int $pins): void;
    public function score(): int;
}

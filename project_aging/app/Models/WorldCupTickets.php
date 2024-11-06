<?php

namespace App\Models;

use App\Interfaces\AgingItem;

class WorldCupTickets implements AgingItem
{
    private const MAX_VALUE = 50;

    public function __construct(private int $value, private int $sellIn) {}

    public function ageByOneDay(): void
    {
        $this->sellIn--;
        switch (true) {
            case $this->sellIn < 0:
                $this->value = 0;
                break;
            case $this->sellIn < 6:
                $this->value = min(self::MAX_VALUE, $this->value + 3);
                break;
            case $this->sellIn < 11:
                $this->value = min(self::MAX_VALUE, $this->value + 2);
                break;
            default:
                $this->value = min(self::MAX_VALUE, $this->value + 1);
                break;
        }
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

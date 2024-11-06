<?php

namespace App\Models;

use App\Interfaces\AgingItem;

class PerishableItem implements AgingItem
{
    private const MIN_VALUE = 0;

    public function __construct(private int $value, private int $sellIn) {}

    public function ageByOneDay(): void
    {
        $this->sellIn--;
        $decrement = $this->sellIn < 0 ? 4 : 2;
        $this->value = max(self::MIN_VALUE, $this->value - $decrement);
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

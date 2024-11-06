<?php

namespace App\Models;

use App\Interfaces\AgingItem;

class VintageWine implements AgingItem
{
    private const MAX_VALUE = 50;

    public function __construct(private int $value, private int $sellIn) {}

    public function ageByOneDay(): void
    {
        $this->sellIn--;
        $this->value = min(self::MAX_VALUE, $this->value + 2);
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

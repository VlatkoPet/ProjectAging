<?php

namespace App\Models;

use App\Interfaces\AgingItem;

class DefaultItem implements AgingItem
{

    private const MIN_VALUE = 0;

    public function __construct(private int $value, private int $sellIn) {}

    public function ageByOneDay(): void
    {
        $this->sellIn--;
        $decrement_value = $this->sellIn < 0 ? 2 : 1;
        $this->value = max(self::MIN_VALUE, $this->value - $decrement_value);
    }

    public function getValue(): int
    {
        return $this->value;
    }
}

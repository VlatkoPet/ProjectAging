<?php

namespace App\Models;

use App\Interfaces\AgingItem;

class GoldBar implements AgingItem
{
    private const MIN_VALUE = 0;
    private const MAX_VALUE = 50;
    
    public function ageByOneDay(): void
    {
        // Gold Bar value does not change
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): int
    {
        return 80; // Gold Bar has a fixed value
    }
}

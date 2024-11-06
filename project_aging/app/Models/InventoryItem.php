<?php

namespace App\Models;

use App\Interfaces\AgingItem;

final class InventoryItem
{
    private AgingItem $agingItem;

    public function __construct(private string $name, AgingItem $agingItem)
    {
        $this->agingItem = $agingItem;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function ageByOneDay(): void
    {
        $this->agingItem->ageByOneDay();
    }

    public function value(): int
    {
        return $this->agingItem->getValue();
    }
}

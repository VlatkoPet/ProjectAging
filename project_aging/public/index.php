<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\InventoryItem;
use App\Models\DefaultItem;
use App\Models\VintageWine;
use App\Models\WorldCupTickets;
use App\Models\PerishableItem;
use App\Models\GoldBar;


$items = [
    new InventoryItem('Hat', new DefaultItem(10, 7)),
    new InventoryItem('Frying Pan', new DefaultItem(10, 4)),
    new InventoryItem('Vintage Wine', new VintageWine(32, 0)),
    new InventoryItem('World Cup Tickets', new WorldCupTickets(10, 8)),
    new InventoryItem('Milk', new PerishableItem(10, 7)),
    new InventoryItem('Gold Bar', new GoldBar())
];

for ($i = 0; $i < 10; $i++) {
    echo 'DAY ' . $i . "\n";
    foreach ($items as $item) {
        $item->ageByOneDay();
        echo $item->name() . ': ' . $item->value() . "\n";
    }
    echo "\n";
}

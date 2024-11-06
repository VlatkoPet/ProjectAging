# ProjectAging

Here's a simple README file that explains your application and how to run it:

This application simulates an inventory management system with various items that age over time. Each item implements a specific aging strategy based on its characteristics. The application's main entry point is the `public/index.php` file, which runs the aging logic for a set of items over a specified number of days.

## Project Structure
project_aging/
├── app/
│   ├── Interfaces/
│   │   └── AgingItem.php
│   └── Models/
│       ├── DefaultItem.php
│       ├── InventoryItem.php  
│       ├── VintageWine.php
│       ├── WorldCupTickets.php
│       ├── PerishableItem.php
│       └── GoldBar.php
├── composer.json
├── vendor/                   
└── public/
    └── index.php


## Requirements

- PHP version 8 or higher (this project php 8.3.3)
- Composer version 2 or higher (this project 2.7.1)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/VlatkoPet/ProjectAging.git
   

2. Install the dependencies using Composer:

``` composer install ```

Running the Application

- run the following command at the root of the application:

```cd project_aging/public```

```php index.php```

How It Works

- The application creates an array of different inventory items, each with a specific aging strategy implemented through the AgingItem interface.
- Each item has a name, a value, and a sell-in period, which affects how its value changes over time.
- The aging process runs for a specified number of days, and for each day, the value of each item is updated based on its aging logic.

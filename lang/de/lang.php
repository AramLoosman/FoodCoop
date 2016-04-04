<?php return [
    'plugin' => [
        'name' => 'FoodCoop',
        'description' => 'Eine einfaches Bestellformular für deine FoodCoop',
        'products' => 'Produkte',
        'orders' => 'Bestellungen',
        'product' => [
            'name' => 'Name',
            'description' => 'Beschreibung',
            'unit' => 'Einheit',
            'price' => 'Preis',
        ],
    ],
    'product' => [
        'name' => [
            'label' => 'Name',
            'comment' => 'Gib den Namen des Produkts ein',
        ],
        'description' => [
            'label' => 'Description',
            'comment' => 'Gib eine kurze Beschreibung zu deinem Produkt ein',
        ],
        'unit' => [
            'label' => 'Unit',
            'comment' => 'Gib die Verpackungseinheit an (z.B. 1 kg, 20 Stück)',
        ],
        'price' => [
            'label' => 'Price',
            'comment' => 'Gib den Preis für eine Verpackungseinheit an',
        ],
    ],
    'order' => [
        'date' => 'Datum',
        'user' => 'Benutzer',
        'status' => 'Status',
        'total' => 'Total',
        'products' => 'Produkte',
        'product_count' => 'Anzahl Produkte',
    ],
];
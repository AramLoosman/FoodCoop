<?php return [
    'plugin' => [
        'name' => 'FoodCoop',
        'description' => 'A simple ordering form for your FoodCoop',
        'products' => 'Products',
        'orders' => 'Orders',
        'vendors' => 'Vendors',
        'collective_orders' => 'Collective orders',
        'collectiveorders' => 'Collective orders',
    ],
    'product' => [
        'name' => [
            'label' => 'Name',
            'comment' => 'Enter the name of your product',
        ],
        'description' => [
            'label' => 'Description',
            'comment' => 'Enter a short description of your product',
        ],
        'unit' => [
            'label' => 'Unit',
            'comment' => 'Enter the packaging unit of your product (i.e. 1 kg, 20 pcs)',
        ],
        'price' => [
            'label' => 'Price',
            'comment' => 'Enter the price for one unit of your product',
        ],
        'vendor' => [
            'label' => 'Vendor',
            'comment' => 'Enter the vendor of this product',
        ],
        'total' => [
            'label' => 'Total',
        ],
    ],
    'order' => [
        'date' => [
            'label' => 'Date',
        ],
        'user' => [
            'label' => 'Users',
        ],
        'status' => [
            'label' => 'Status',
        ],
        'total' => [
            'label' => 'Total',
        ],
        'products' => [
            'label' => 'Products',
        ],
        'product_count' => [
            'label' => 'Number of products',
        ],
    ],
    'vendor' => [
        'name' => [
            'label' => 'Name',
            'comment' => 'Enter the name of the vendor',
        ],
        'adress' => [
            'label' => 'Adress',
            'comment' => 'Enter the adress of the vendor',
        ],
    ],
    'collective_order' => [
        'orders' => [
            'label' => 'Orders',
        ],
        'title' => [
            'label' => 'Title',
            'comment' => 'Enter a descriptive title for your collective order (i.E. "April 2016")',
        ],
        'vendor' => [
            'label' => 'Vendor',
            'comment' => 'Select the vendor for this collective order',
        ],
        'open_from' => [
            'label' => 'Open from',
            'comment' => 'Defines when ordering on this collective order is allowed. Leave empty if not applicable.',
        ],
        'open_until' => [
            'label' => 'Open until',
            'comment' => 'Defines until when the ordering on this collective order is allowed. Leave empty if open ended.',
        ],
    ],
];

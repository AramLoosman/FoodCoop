<?php namespace AramLoosman\Foodcoop\Models;

use Model;
use Aramloosman\Foodcoop\Models\Orderproduct;
use Aramloosman\Foodcoop\Models\Product;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

	public $belongsToMany = [
		'products' => [
			'Aramloosman\Foodcoop\Models\Product',
			'table' => 'aramloosman_foodcoop_order_product',
			'pivot' => [ 'amount', 'price', 'total' ]
		],
		'product_count' => [
			'Aramloosman\Foodcoop\Models\Product',
			'table' => 'aramloosman_foodcoop_order_product',
			'pivot' => [ 'amount', 'price', 'total' ],
			'count' => true
		]
	];

	public $belongsTo = [
		'user' => 'RainLab\User\Models\User',
        'collective_order' => 'Aramloosman\Foodcoop\Models\CollectiveOrder',
	];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aramloosman_foodcoop_orders';

}

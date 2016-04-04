<?php namespace AramLoosman\Foodcoop\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
	use \October\Rain\Database\Traits\Sortable;

    /*
     * Validation
     */
    public $rules = [
    ];

	public $belongsToMany = [
		'orders' => [
			'\AramLoosman\Foodcoop\Models\Order',
			'table' => 'aramloosman_foodcoop_order_product',
			'pivot' => [ 'amount', 'price', 'total' ]
		]
	];

    public $belongsTo = [
        'vendor' => 'Aramloosman\Foodcoop\Models\Vendor',
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aramloosman_foodcoop_products';
}

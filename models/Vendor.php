<?php namespace AramLoosman\Foodcoop\Models;

use Model;

/**
 * Model
 */
class Vendor extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $hasMany = [
        'collective_orders' => 'Aramloosman\Foodcoop\Models\CollectiveOrder',
        'products' => 'Aramloosman\Foodcoop\Models\Product',
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aramloosman_foodcoop_vendors';
}

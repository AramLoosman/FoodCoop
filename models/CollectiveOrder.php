<?php namespace AramLoosman\Foodcoop\Models;

use Model;
use Carbon\Carbon;

/**
 * Model
 */
class CollectiveOrder extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $belongsTo = [
        'vendor' => 'Aramloosman\Foodcoop\Models\Vendor',
    ];

    public $hasMany = [
        'orders' => 'Aramloosman\Foodcoop\Models\Order',
        'order_count' => [
            'Aramloosman\Foodcoop\Models\Order',
            'count' => true
        ],
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aramloosman_foodcoop_collective_order';

    /**
     * Checks if this collective order is open for ordering
     */
    public function isOpen() {

        // TODO put timezone into config
        $now = Carbon::now('Europe/Zurich');

        $openFrom = new Carbon($this->open_from, 'Europe/Zurich');
        $openUntil = new Carbon($this->open_until, 'Europe/Zurich');

        if( ($this->open_from == null or $openFrom <= $now) and
            ($this->open_until == null or $openUntil > $now) ) {
                return true;
        }
        return false;
    }
}

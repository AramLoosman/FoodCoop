<?php namespace AramLoosman\Foodcoop;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
		return [
			'\AramLoosman\Foodcoop\Components\Order' => 'Order',
			'\AramLoosman\Foodcoop\Components\Orderlist' => 'Orderlist',
            '\AramLoosman\Foodcoop\Components\CollectiveOrderList' => 'CollectiveOrderList'
		];
    }

    public function registerSettings()
    {
    }
}

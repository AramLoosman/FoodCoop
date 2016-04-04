<?php

namespace AramLoosman\Foodcoop\Components;

use Auth;
use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Symfony\Component\HttpFoundation\Request;
use AramLoosman\Foodcoop\Models\Order as OrderModel;
use AramLoosman\Foodcoop\Models\Product as ProductModel;
use AramLoosman\Foodcoop\Models\CollectiveOrder;
use RainLab\User\Models\User;

class CollectiveOrderList extends ComponentBase
{
	public $orderPage;

	protected $dates = ['created_at', 'updated_at', 'open_from', 'open_until'];

	public function componentDetails()
	{
		return [
			'name' => 'Collective order list',
			'description' => 'Lists the collective orders on which an order can be placed'
		];
	}

	public function defineProperties() {
		return [
			'orderPage' => [
				'title' => 'Order page',
				'description' => 'The page where this component links to if you select a collective order.',
				'type' => 'dropdown',
			],
            'showComing' => [
                'title' => 'List coming collective orders.',
				'description' => 'List coming collective orders next to the currently open ones.',
				'type' => 'checkbox',
				'group' => 'Settings',
				'default' => false
            ],
            'showPassed' => [
                'title' => 'List passed collective orders.',
				'description' => 'List passed collective orders next to the currently open ones.',
				'type' => 'checkbox',
				'group' => 'Settings',
				'default' => false
            ],
            // order page
        ];
	}

	public function getOrderPageOptions() {
		return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
	}

	public function onRun() {
		$this->orderPage = $this->page['orderPage'] = $this->property('orderPage');
	}
	public function onRender()
	{
		if(!Auth::check()) {
			throw new Exception('Not authenticated');
			return false;
		}
		$user = Auth::getUser();

		$collectiveOrders = CollectiveOrder::where('open_from', '<=', Carbon::now('Europe/Zurich'))->where('open_until', '>', Carbon::now('Europe/Zurich'))->get();

		$this->page['collective_orders'] = $collectiveOrders;
	}
}

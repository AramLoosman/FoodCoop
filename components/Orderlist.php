<?php

namespace AramLoosman\Foodcoop\Components;

use Auth;
use Cms\Classes\ComponentBase;
use Symfony\Component\HttpFoundation\Request;
use AramLoosman\Foodcoop\Models\Order as OrderModel;
use AramLoosman\Foodcoop\Models\Product as ProductModel;
use RainLab\User\Models\User;

class Orderlist extends ComponentBase
{
	public function componentDetails()
	{
		return [
			'name' => 'Order list',
			'description' => 'Lists the (RainLab\User) user\'s orders'
		];
	}

	public function defineProperties() {
		return [];
	}
	public function onRun() {}
	public function onRender() 
	{
		if(!Auth::check()) {
			throw new Exception('Not authenticated');
			return false;
		}
		$user = Auth::getUser();

		$orders = OrderModel::where( 'user_id', $user->id)->get();

		$this->page['orders'] = $orders;
	}
}

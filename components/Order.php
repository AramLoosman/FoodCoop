<?php

namespace AramLoosman\Foodcoop\Components;

use Cms\Classes\ComponentBase;
use Symfony\Component\HttpFoundation\Request;
use AramLoosman\Foodcoop\Models\Order as OrderModel;
use AramLoosman\Foodcoop\Models\Product as ProductModel;
use AramLoosman\Foodcoop\Models\CollectiveOrder as CollectiveOrderModel;
use AramLoosman\Foodcoop\Models\Vendor as VendorModel;
use RainLab\User\Models\User;

class Order extends ComponentBase
{
	public function componentDetails()
	{
		return [
			'name' => 'Order form',
			'description' => 'Adds an ordering form to your page, needs a logged in RainLab\User to work properly'
		];
	}

	public function defineProperties() {
		return [
			'collectiveOrderId' => [
				'title' => 'Id of the collective order which this order belongs to.',
				'description' => 'Each order needs to belong to a collective order to determine its products.s',
				'type' => 'text',
				'group' => 'Parameters',
				'default' => '{{ :id }}'
			]
		];
	}
	public function onRun() {}
	public function onRender()
	{
		$collectiveOrder = CollectiveOrderModel::findOrFail($this->property('collectiveOrderId'));
		if(!$collectiveOrder->isOpen()) {
			// TODO error flash?
			dd('We\'re sorry, but this collective order is not open for ordering');
		}

		$products = $collectiveOrder->vendor->products;

		$this->page['products'] = $products;
	}

	public function onOrder() {
		if(!\Auth::check()) {
			throw new Exception('Not authenticated');
			return false;
		}

		$user = \Auth::getUser();

		$productlist = \Request::input('orderproduct');
		$order = new OrderModel;

		$order->collective_order = $this->property('collectiveOrderId');
		$order->status = 'new';
		$order->user = $user;
		$order->save();
		$ordertotal = 0;

		foreach($productlist as $orderproduct) {
			if($orderproduct['amount'] > 0) {
				$product = ProductModel::findOrFail($orderproduct['id']);
				$total = $orderproduct['amount'] * $product->price;
				$ordertotal += $total;

				$order->products()->attach($product, [
					'amount' => $orderproduct['amount'],
					'price' => $product->price,
					'total' => $total
				]);
			}
		}

		$order->total = $ordertotal;
		$order->save();
	}
}

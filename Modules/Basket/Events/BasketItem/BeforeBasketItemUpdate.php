<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The event is triggered before an item in the shopping cart is updated.
 */
abstract class BeforeBasketItemUpdate 
{

	abstract public function getCategoryRebateForBasketItem(
	);

	/**
	 * The shopping cart item that has changed.
	 */
	abstract public function getBasketItem(
	):BasketItem;

}
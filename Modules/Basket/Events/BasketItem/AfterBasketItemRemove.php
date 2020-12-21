<?php
namespace Plenty\Modules\Basket\Events\BasketItem;

use Plenty\Modules\Basket\Models\BasketItem;

/**
 * The event is triggered after an item is deleted from the shopping cart.
 */
abstract class AfterBasketItemRemove 
{

	abstract public function getBasketItem(
	):BasketItem;

}
<?php
namespace Plenty\Modules\Webshop\Events;

use Plenty\Modules\Basket\Events\BasketItem\BasketItemEvent;
use Plenty\Modules\Basket\Models\BasketItem;
use Plenty\Modules\Order\Models\OrderItemType;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;
use Plenty\Modules\Webshop\Contracts\CheckoutRepositoryContract;

/**
 * Event for receiving the basket item before transformed to an order item.
 */
abstract class BeforeBasketItemToOrderItem 
{

	/**
	 * Get preview status for current event.
	 */
	abstract public function getIncompleteStatus(
	):bool;

	abstract public function addAdditionalVariationProperties(
		 $variationProperties = []
	);

	abstract public function getAdditionalVariationProperties(
	);

	/**
	 * The shopping cart item that has changed.
	 */
	abstract public function getBasketItem(
	):BasketItem;

}
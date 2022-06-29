<?php
namespace Plenty\Modules\Order\AdvanceOrder\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The AdvanceOrderRepositoryContract is the interface for the advance order repository. This interface allows you to create and update advance orders.
 */
interface AdvanceOrderRepositoryContract 
{

	/**
	 * Create an advance order
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Create an advance order with coupon codes
	 */
	public function createWithCoupons(
		array $data, 
		array $coupons = [], 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update an advance order
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete an advance order
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from an advance order
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create an advance order from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Convert sales order into advance order
	 */
	public function convertFromSalesOrder(
		int $orderId
	):Order;

	/**
	 * Change an order item of type "variation" to "unassigned variation".
	 */
	public function detachVariation(
		int $orderItemId, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Change an order item of type "unassigned variation" to "variation".
	 */
	public function assignVariation(
		int $orderItemId, 
		int $variationId, 
		int $warehouseId = null, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

}
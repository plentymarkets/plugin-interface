<?php
namespace Plenty\Modules\Order\ReturnOrder\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The ReturnOrderRepositoryContract is the interface for the return order repository. This interface allows you to create and update return orders.
 */
interface ReturnOrderRepositoryContract 
{

	/**
	 * Create a return
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a return
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a return
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a return
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a return from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Validate order items for create a return from a parent order
	 */
	public function validateFromParent(
		int $orderId, 
		array $data = []
	):array;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Book order items of return
	 */
	public function book(
		int $orderId, 
		array $data = []
	);

	/**
	 * Validate booking of an return
	 */
	public function validateBook(
		int $orderId
	):array;

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
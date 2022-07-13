<?php
namespace Plenty\Modules\Order\Reorder\Contracts;

use Carbon\Carbon;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Models\Order;

/**
 * Create and update reorders.
 */
interface ReorderRepositoryContract 
{

	/**
	 * Create a reorder
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a reorder
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a reorder
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a reorder
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a reorder from a parent order
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
	 * Get the date when the reorder will probably be delivered.
	 */
	public function getDeliveryDate(
		int $orderId
	):Carbon;

	/**
	 * Calculate and save the delivery dates
	 */
	public function updateDeliveryDates(
		int $orderId
	):Order;

	/**
	 * Create reorder(s) for an order
	 */
	public function generateFromOrder(
		int $orderId, 
		array $data
	):array;

	/**
	 * Create / update reorder(s) for order items
	 */
	public function generateFromOrderItems(
		int $orderId, 
		array $data
	):array;

	/**
	 * Validate order items for create a reorder from a sales order, delivery order, repair and warranty
	 */
	public function validateGenerateFromOrder(
		int $orderId
	):array;

}
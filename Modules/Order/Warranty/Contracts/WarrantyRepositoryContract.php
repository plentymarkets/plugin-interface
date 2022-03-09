<?php
namespace Plenty\Modules\Order\Warranty\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The WarrantyRepositoryContract is the interface for the warranty repository. This interface allows you to create and update warranties.
 */
interface WarrantyRepositoryContract 
{

	/**
	 * Create a warranty
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a warranty
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a warranty
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a warranty
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a warranty from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Validate order items for create a warranty from a parent order
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
	 * Book order.
	 */
	public function book(
		int $orderId, 
		array $data = []
	):bool;

	/**
	 * Cancellation the booking of an order. The ID of the order must be specified.
	 */
	public function cancelBooking(
		int $orderId, 
		array $data = []
	):bool;

}
<?php
namespace Plenty\Modules\Order\Redistribution\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Create and update redistributions.
 */
interface RedistributionRepositoryContract 
{

	/**
	 * Create a redistribution
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a redistribution
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a redistribution
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a redistribution
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a redistribution from a parent order
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
	 * Get a redistribution create preview for the given order data.
	 */
	public function previewCreate(
		array $data
	):array;

	/**
	 * Get a redistribution update preview for the given order data.
	 */
	public function previewUpdate(
		int $orderId, 
		array $data
	):array;

}
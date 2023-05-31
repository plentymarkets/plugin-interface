<?php
namespace Plenty\Modules\Order\Subscription\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The SubscriptionRepositoryContract is the interface for the subscription repository. This interface allows you to create and update subscriptions.
 */
interface SubscriptionRepositoryContract 
{

	/**
	 * Create a subscription
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a subscription
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a subscription
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a subscription
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Get a subscription create preview for the given order data.
	 */
	public function previewCreate(
		array $data
	):array;

	/**
	 * Get a subscription update preview for the given order data.
	 */
	public function previewUpdate(
		int $orderId, 
		array $data
	):array;

	/**
	 * Create a subscription from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Validate order items for subscription creation from parent order
	 */
	public function validateFromParent(
		int $orderId, 
		array $data = []
	):array;

}
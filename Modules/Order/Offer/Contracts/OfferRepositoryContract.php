<?php
namespace Plenty\Modules\Order\Offer\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The OfferRepositoryContract is the interface for the offer repository. This interface allows you to create and update offers.
 */
interface OfferRepositoryContract 
{

	/**
	 * Create an offer
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update an offer
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete an offer
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from an offer
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create an offer from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Get an offer create preview for the given order data.
	 */
	public function previewCreate(
		array $data
	):array;

	/**
	 * Get an offer update preview for the given order data.
	 */
	public function previewUpdate(
		int $orderId, 
		array $data
	):array;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
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
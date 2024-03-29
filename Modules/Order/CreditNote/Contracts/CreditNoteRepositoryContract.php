<?php
namespace Plenty\Modules\Order\CreditNote\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The CreditNoteRepositoryContract is the interface for the credit note repository. This interface allows you to create and update credit notes.
 */
interface CreditNoteRepositoryContract 
{

	/**
	 * Create a credit note
	 */
	public function create(
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a credit note
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a credit note
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a credit note
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a credit note from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Validate order items for create a credit note from a parent order
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

	/**
	 * Get a credit note create preview for the given order data.
	 */
	public function previewCreate(
		array $data
	):array;

	/**
	 * Get a credit note update preview for the given order data.
	 */
	public function previewUpdate(
		int $orderId, 
		array $data
	):array;

}
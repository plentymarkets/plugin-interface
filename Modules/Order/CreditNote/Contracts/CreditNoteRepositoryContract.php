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

}
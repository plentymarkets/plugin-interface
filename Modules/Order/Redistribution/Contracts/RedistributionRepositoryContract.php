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
		array $data
	):Order;

	/**
	 * Update a redistribution
	 */
	public function update(
		int $orderId, 
		array $data
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
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

}
<?php
namespace Plenty\Modules\Order\MultiSalesOrder\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The MultiSalesOrderRepositoryContract is the interface for the multi sales order repository. This interface allows you to update multi orders.
 */
interface MultiSalesOrderRepositoryContract 
{

	/**
	 * Update a multi sales order
	 */
	public function update(
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

}
<?php
namespace Plenty\Modules\Order\Shipping\Pallet\Contracts;

use Plenty\Modules\Order\Shipping\Package\Models\OrderShippingPackage;
use Plenty\Modules\Order\Shipping\Pallet\Models\OrderShippingPallet;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Create, get, update and delete order shipping pallet.
 */
interface OrderShippingPalletRepositoryContract 
{

	/**
	 * Get an order shipping pallet
	 */
	public function getOrderShippingPallet(
		int $orderShippingPalletId
	):OrderShippingPallet;

	/**
	 * List order shipping pallets
	 */
	public function listOrderShippingPallets(
		array $filters, 
		array $with
	):array;

	/**
	 * Get all the packages in a pallet
	 */
	public function listPalletPackages(
		int $orderShippingPalletId, 
		int $orderId
	):array;

	/**
	 * Create an order shipping pallet
	 */
	public function createOrderShippingPallet(
		array $data
	):OrderShippingPallet;

	/**
	 * Update an order shipping pallet
	 */
	public function updateOrderShippingPallet(
		int $orderShippingPalletId, 
		array $data
	):OrderShippingPallet;

	/**
	 * Delete an order shipping pallet
	 */
	public function deleteOrderShippingPallet(
		int $orderShippingPalletId
	):OrderShippingPallet;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}
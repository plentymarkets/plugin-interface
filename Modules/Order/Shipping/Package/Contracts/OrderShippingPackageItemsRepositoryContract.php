<?php
namespace Plenty\Modules\Order\Shipping\Package\Contracts;

use Plenty\Data\SimpleRestResponse;
use Plenty\Modules\Order\Shipping\Package\Models\OrderShippingPackageItems;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Create and get items in packages from order
 */
interface OrderShippingPackageItemsRepositoryContract 
{

	/**
	 * Get items for a package
	 */
	public function getItemsForPackage(
		int $packageId, 
		int $page = 1, 
		int $perPage = 1000, 
		string $sortBy = "id", 
		string $sortOrder = "desc"
	):OrderShippingPackageItems;

	/**
	 * Get all the packed items in the packages in the pallets in the order
	 */
	public function getItemsInPackagesPalletsPaginated(
		int $orderId, 
		int $page = 1, 
		int $perPage = 1000, 
		string $sortBy = "id", 
		string $sortOrder = "asc"
	):OrderShippingPackageItems;

	/**
	 * Get items for an order
	 */
	public function getItemsFromPackagesForOrder(
		int $orderId
	):OrderShippingPackageItems;

	/**
	 * Get packed items in an order
	 */
	public function getPackedItemsPerPackageForOrder(
		int $orderId
	):array;

	/**
	 * Get packed items in a package
	 */
	public function getPackedItemsFromPackage(
		int $packageId, 
		array $with = [], 
		int $page = 1, 
		int $perPage = 25, 
		string $sortBy = "variationId", 
		string $sortOrder = "asc"
	):OrderShippingPackageItems;

	/**
	 * Get unpacked items for an order
	 */
	public function getUnpackedItemsFromPackagesForOrder(
		int $orderId
	):array;

	/**
	 * Get all the unpacked items in the order
	 */
	public function getUnpackedItemsForOrderPaginated(
		int $orderId, 
		int $page = 1, 
		int $perPage = 25, 
		string $sortBy = "itemVariationId", 
		string $sortOrder = "asc"
	):OrderShippingPackageItems;

	/**
	 * Create items for a package
	 */
	public function createItemsForPackageOrder(
		array $data, 
		int $packageId = 0, 
		bool $isCallFromLegacyCode = false
	):array;

	/**
	 * Update package, variation or quantity for an order
	 */
	public function updateItemsInOrderShippingPackage(
		int $id, 
		array $data
	):int;

	/**
	 * Delete a variation of an item from package in an order
	 */
	public function deleteItemsInOrderShippingPackage(
		int $id
	):int;

	/**
	 * Update items in a package
	 */
	public function updateItemsFromPackage(
		int $packageId, 
		int $itemId, 
		int $variationId, 
		array $data
	):int;

	/**
	 * Delete a variation of an item from package in order
	 */
	public function deleteItemsFromPackage(
		int $packageId, 
		int $itemId, 
		int $variationId
	):DeleteResponse;

}
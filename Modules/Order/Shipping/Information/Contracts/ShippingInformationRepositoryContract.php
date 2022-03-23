<?php
namespace Plenty\Modules\Order\Shipping\Information\Contracts;

use Plenty\Modules\Order\Shipping\Information\Models\ShippingInformation;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ShippingInformationRepositoryContract is the interface for the shipping information repository. This interface allows to get shipping information by order ID, create new shipping information or update shipping information.
 */
interface ShippingInformationRepositoryContract 
{

	/**
	 * Get Shipping Information by an order ID.
	 */
	public function getShippingInformationByOrderId(
		int $orderId
	):ShippingInformation;

	/**
	 * Get export label for an order ID.
	 */
	public function getShippingExportLabelByOrderId(
		int $orderId
	);

	/**
	 * Get all the orders with their shipping information
	 */
	public function getOrdersShippingInformation(
		array $searchParams
	):array;

	/**
	 * Get all the orders with their shipping information in a paginated form
	 */
	public function listOrdersShippingInformation(
		array $searchParams, 
		int $itemsPerPage = null, 
		int $page = null
	):PaginatedResult;

	/**
	 * Delete Shipping Information by an order ID
	 */
	public function resetShippingInformation(
		int $orderId
	);

	/**
	 * Create Shipping Information
	 */
	public function saveShippingInformation(
		array $data
	):ShippingInformation;

	/**
	 * Update Additional Data of Shipping Information by Order ID
	 */
	public function updateAdditionalData(
		array $data, 
		int $orderId
	):ShippingInformation;

	/**
	 * Update Shipping Status of Shipping Information by Order ID
	 */
	public function updateShippingStatus(
		array $data, 
		int $orderId
	):ShippingInformation;

}
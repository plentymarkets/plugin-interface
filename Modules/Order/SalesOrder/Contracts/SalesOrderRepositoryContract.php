<?php
namespace Plenty\Modules\Order\SalesOrder\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Order\Models\Order;

/**
 * The SalesOrderRepositoryContract is the interface for the sales order repository. This interface allows you to create and update sales orders.
 */
interface SalesOrderRepositoryContract 
{

	/**
	 * Create a sales order
	 */
	public function create(
		array $with = [], 
		bool $lazyLoaded = false, 
		array $data
	):Order;

	/**
	 * Create a sales order with coupon codes
	 */
	public function createWithCoupons(
		array $data, 
		array $coupons = [], 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update a sales order
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete a sales order
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Delete an order item from a sales order
	 */
	public function deleteOrderItem(
		int $orderItemId
	):bool;

	/**
	 * Create a sales order from a parent order
	 */
	public function createFromParent(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Get a sales order create preview for the given order data.
	 */
	public function previewCreate(
		array $data
	):array;

	/**
	 * Get a sales order create preview for the given order data with coupon codes
	 */
	public function previewCreateWithCoupons(
		array $data, 
		array $coupons = []
	):array;

	/**
	 * Get an sales order update preview for the given order data.
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
	 * Book order.
	 */
	public function book(
		int $orderId, 
		array $data = []
	):bool;

	/**
	 * Cancellation the booking of an order. The ID of the order must be specified.
	 */
	public function cancelBooking(
		int $orderId, 
		array $data = []
	):bool;

	/**
	 * Validate cancellation of the booking of an order
	 */
	public function validateCancelBooking(
		int $orderId
	):array;

	/**
	 * Convert advance order into sales order
	 */
	public function convertFromAdvanceOrder(
		int $orderId
	):Order;

}
<?php
namespace Plenty\Modules\Order\Booking\Contracts;

use Plenty\Modules\Order\Booking\Models\OrderBooking;

/**
 * Book orders, order items and order item transactions.
 */
interface OrderBookingRepositoryContract 
{

	/**
	 * Book an order
	 */
	public function bookOrder(
		int $orderId, 
		string $deliveryNoteNumber = null
	):OrderBooking;

	/**
	 * Book an order item
	 */
	public function bookOrderItem(
		int $orderItemId, 
		string $deliveryNoteNumber = null
	):OrderBooking;

	/**
	 * Book order item transactions
	 */
	public function bookOrderItemTransactions(
		array $transactionIds, 
		int $warehouseId = null, 
		string $deliveryNoteNumber = null, 
		array $purchasePrices = []
	):OrderBooking;

}
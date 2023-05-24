<?php
namespace Plenty\Modules\Payment\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\Flysystem\Exception;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Payment\Models\Payment;
use Plenty\Modules\Payment\Models\PaymentOrderRelation;

/**
 * The PaymentOrderRelationRepositoryContract is the interface for the payment order relation repository. Create and delete relations between payments and orders.
 */
interface PaymentOrderRelationRepositoryContract 
{

	/**
	 * Creates a payment order relation.
	 */
	public function createOrderRelation(
		Payment $payment, 
		Order $order
	):PaymentOrderRelation;

	/**
	 * Gets the payment order relation.
	 */
	public function findOrderRelation(
		Payment $payment
	):PaymentOrderRelation;

	/**
	 * Deletes a payment order relation.
	 */
	public function deleteOrderRelation(
		Payment $payment
	);

	/**
	 * Assign a payment to an order ID if order ID is valid and order ID doesn't have a payment assigned.
	 */
	public function createOrderRelationWithValidation(
		int $paymentId, 
		int $orderId, 
		int $matchingRate = null, 
		bool $allowMultiplePaymentsPerOrder = false
	):PaymentOrderRelation;

	/**
	 * Assign a payment to an order if invoice number is valid.
	 */
	public function createOrderRelationByInvoiceNumber(
		int $paymentId, 
		string $invoiceNumber, 
		bool $allowMultiplePaymentsPerOrder = false
	):PaymentOrderRelation;

	/**
	 * Bulk auto assign payments
	 */
	public function autoAssignPayments(
		array $paymentIds
	):array;

	/**
	 * Detach all the payment from and order.
	 */
	public function detachAllPayments(
		int $orderId
	);

}
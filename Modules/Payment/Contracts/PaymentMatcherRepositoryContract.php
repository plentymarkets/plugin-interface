<?php
namespace Plenty\Modules\Payment\Contracts;

use Plenty\Modules\Payment\Exceptions\PaymentMatcherException;
use Plenty\Modules\Payment\Models\Payment;

/**
 * The PaymentMatcherRepositoryContract automatically matching payments to an order.
 */
interface PaymentMatcherRepositoryContract 
{

	/**
	 * Checks and save the payment data
	 */
	public function checkMapPayment(
		int $mopId, 
		 $data
	);

	/**
	 * Checks and assigns payment data.
	 */
	public function checkMapFindAssignPayment(
		int $mopId, 
		 $data
	):string;

	/**
	 * Finds and assigns payment data
	 */
	public function findAssignPayment(
		Payment $payment
	);

	/**
	 * Gets the matching of payment data with orders.
	 */
	public function getMatchingRatesForPayment(
		int $paymentId
	):array;

	/**
	 * Get matching or assigning rate list for a payment
	 */
	public function getMatchingOrAssigningRatesForPayment(
		int $paymentId
	):array;

}
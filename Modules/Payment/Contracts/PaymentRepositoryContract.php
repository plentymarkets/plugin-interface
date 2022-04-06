<?php
namespace Plenty\Modules\Payment\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Data\SimpleRestResponse;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Payment\Models\Payment;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The PaymentRepositoryContract is the interface for the payment repository. List, get, create and update payments. Payments can come into plentymarkets automatically or can be booked manually. Existing payments can be filtered by payment method, by ID, by payment status, by transaction type, by order or by date. Existing payments can also be updated.
 */
interface PaymentRepositoryContract 
{

	/**
	 * Lists payments.
	 */
	public function getAll(
		int $itemsPerPage = 50, 
		int $page = 1
	):array;

	/**
	 * Searches for a list of payments.
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = \Plenty\Modules\Payment\Models\Payment::MAX_ITEMS_PER_PAGE, 
		array $with = []
	):PaginatedResult;

	/**
	 * Gets a payment. The ID of the payment must be specified.
	 */
	public function getPaymentById(
		int $paymentId
	):Payment;

	/**
	 * Lists payments of a payment method. The ID of the payment method must be specified.
	 */
	public function getPaymentsByMethodId(
		int $methodId, 
		int $itemsPerPage = 50, 
		int $page = 1
	):array;

	/**
	 * Lists payments of a payment status. The ID of the payment status must be specified.
	 */
	public function getPaymentsByStatusId(
		int $statusId, 
		int $itemsPerPage = 50, 
		int $page = 1
	):array;

	/**
	 * Lists payments of a transaction type. The transaction type must be specified.
	 */
	public function getPaymentsByTransactionType(
		int $transactionType, 
		int $itemsPerPage = 50, 
		int $page = 1
	):array;

	/**
	 * Lists payments of an order. The ID of the order must be specified.
	 */
	public function getPaymentsByOrderId(
		int $orderId
	):array;

	/**
	 * Lists payments by import date. The start and the end of the date range must be specified.
	 */
	public function getPaymentsByImportDateInterval(
		string $startDate, 
		string $endDate, 
		int $itemsPerPage = 50, 
		int $page = 1
	):array;

	/**
	 * Lists payments by entry date. The start and the end of the date range must be specified.
	 */
	public function getPaymentsByEntryDateInterval(
		string $startDate, 
		string $endDate, 
		int $itemsPerPage = 50, 
		int $page = 1
	):array;

	/**
	 * Lists payments by payment property type and value.
	 */
	public function getPaymentsByPropertyTypeAndValue(
		int $propertyTypeId = 0, 
		 $propertyValue = "", 
		int $itemsPerPage = 50, 
		int $page = 1
	);

	/**
	 * Creates a payment.
	 */
	public function createPayment(
		 $data
	):Payment;

	/**
	 * Updates a payment.
	 */
	public function updatePayment(
		 $data
	):Payment;

	public function getStatusConstants(
	):array;

	public function getOriginConstants(
	):array;

	public function deletePayment(
		int $paymentId
	);

	/**
	 * Split and assign a payment to given order IDs
	 */
	public function splitAndAssignPayment(
		int $paymentId, 
		array $orderIds
	):bool;

	/**
	 * Bulk delete payments.
	 */
	public function deletePayments(
		array $paymentIds
	):array;

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
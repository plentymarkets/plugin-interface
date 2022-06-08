<?php
namespace Plenty\Modules\Order\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Scheduler\Models\OrderScheduler;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Contracts\SortableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The OrderRepositoryContract is the interface for the order repository. This interface allows you to find, create and update orders. There are many different order types and the data returned depends on the order type.
 */
interface OrderRepositoryContract 
{

	/**
	 * Get an order
	 */
	public function findOrderById(
		int $orderId, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Get an order
	 */
	public function findById(
		int $orderId, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Get orders
	 */
	public function getByIds(
		array $orderIds, 
		array $with = [], 
		bool $lazyLoaded = false
	):Collection;

	/**
	 * Get an order by external order ID
	 */
	public function findOrderByExternalOrderId(
		string $externalOrderId, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * List orders by external order ID
	 */
	public function getByExternalOrderId(
		string $externalOrderId, 
		array $with = [], 
		bool $lazyLoaded = false
	):Collection;

	/**
	 * Create an order
	 */
	public function createOrder(
		array $data, 
		string $coupon = null, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Create an order
	 */
	public function create(
		array $data, 
		array $coupons = [], 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update an order
	 */
	public function updateOrder(
		array $data, 
		int $orderId, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Update an order
	 */
	public function update(
		int $orderId, 
		array $data, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Delete an order
	 */
	public function deleteOrder(
		int $orderId
	):bool;

	/**
	 * Delete an order
	 */
	public function delete(
		int $orderId
	);

	/**
	 * Restore an order
	 */
	public function undeleteOrder(
		int $orderId, 
		float $status
	):Order;

	/**
	 * Checks whether an order has been deleted or not.
	 */
	public function isDeleted(
		int $orderId
	):bool;

	/**
	 * Get a scheduler order
	 */
	public function findSchedulerById(
		int $schedulerId
	):OrderScheduler;

	/**
	 * List orders of a contact
	 */
	public function allOrdersByContact(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * List orders that include one or more variations from a supplier
	 */
	public function allOrdersBySupplier(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * List orders sent by a contact
	 */
	public function allOrdersByContactSender(
		int $contactId, 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	):PaginatedResult;

	/**
	 * Get latest order of a contact
	 */
	public function getLatestOrderByContactId(
		int $contactId, 
		array $with = [], 
		bool $lazyLoaded = false
	):Order;

	/**
	 * Lists orders
	 */
	public function searchOrders(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		bool $lazyLoaded = false
	):PaginatedResult;

	/**
	 * List package numbers of an order
	 */
	public function getPackageNumbers(
		int $orderId
	):array;

	/**
	 * Cancel an order
	 */
	public function cancelOrder(
		int $orderId, 
		array $data
	);

	/**
	 * Cancel an order
	 */
	public function cancel(
		int $orderId, 
		array $data = []
	);

	/**
	 * Find the order for the given order ID and access key.
	 */
	public function findOrderByAccessKey(
		int $orderId, 
		string $accessKey
	):Order;

	/**
	 * Generate an access key for the given order ID.
	 */
	public function generateAccessKey(
		int $orderId, 
		bool $regenerate = false
	):string;

	/**
	 * Complete an incomplete order.
	 */
	public function completeOrder(
		int $orderId, 
		array $data = []
	):Order;

	/**
	 * Complete an incomplete order.
	 */
	public function complete(
		int $orderId, 
		array $data = []
	):Order;

	/**
	 * Creates a multi order for a specific contact
	 */
	public function createMultiOrderByContact(
		int $contactId
	):Order;

	/**
	 * Set order status to 4 or 5
	 */
	public function setOrderStatus45(
		int $orderId
	):Order;

	/**
	 * Get My Account url of the order
	 */
	public function getMyAccountUrl(
		int $orderId
	):string;

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
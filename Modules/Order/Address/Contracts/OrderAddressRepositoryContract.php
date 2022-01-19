<?php
namespace Plenty\Modules\Order\Address\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelNotEditableException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Account\Address\Models\AddressRelationType;

/**
 * The OrderAddressRepositoryContract is the interface for the order address repository. This interface allows you to get, create, update and delete addresses of an order.
 */
interface OrderAddressRepositoryContract 
{

	/**
	 * Get an address of an order
	 */
	public function findAddressByType(
		int $orderId, 
		int $typeId
	):Address;

	/**
	 * Get an address of a scheduler order
	 */
	public function findSchedulerAddressByType(
		int $schedulerId, 
		int $typeId
	):Address;

	/**
	 * Create an address for an order
	 */
	public function createOrderAddress(
		array $data, 
		int $orderId, 
		int $typeId = \Plenty\Modules\Account\Address\Models\AddressRelationType::BILLING_ADDRESS
	):Address;

	/**
	 * Update an address of an order
	 */
	public function updateOrderAddress(
		array $data, 
		int $addressId, 
		int $orderId, 
		int $typeId
	):Address;

	/**
	 * Get an address
	 */
	public function getAddress(
		int $addressId, 
		array $with = []
	):Address;

	/**
	 * List addresses of an an order
	 */
	public function findAddresses(
		int $orderId
	):Collection;

	/**
	 * Get an address of an order
	 */
	public function getAddressOfOrder(
		int $addressId, 
		int $orderId, 
		int $typeId
	):Address;

	/**
	 * Get an address of a scheduler
	 */
	public function getAddressOfScheduler(
		int $addressId, 
		int $schedulerId, 
		int $typeId
	):Address;

	/**
	 * Create an address relation from an order to an address
	 */
	public function addOrderAddress(
		int $addressId, 
		int $orderId, 
		int $typeId
	);

	/**
	 * Create an address relation from a scheduler to an address
	 */
	public function addSchedulerAddress(
		int $addressId, 
		int $schedulerId, 
		int $typeId
	);

	/**
	 * Delete an address relation from an order
	 */
	public function deleteOrderAddress(
		int $addressId, 
		int $orderId, 
		int $typeId
	):bool;

}
<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelNotEditableException;
use Plenty\Modules\Account\Address\Models\Address;
use Plenty\Modules\Account\Address\Models\AddressContactRelation;

/**
 * The ContactAddressRepositoryContract is the interface for the contact address repository.
 * This interface allows to list, get, create, update, add and delete addresses of the contact.
 */
interface ContactAddressRepositoryContract 
{

	/**
	 * Returns primary or last created contact addresses
	 */
	public function getPrimaryOrLastCreatedContactAddresses(
		int $contactId
	):array;

	/**
	 * Returns an address of a given contact for the given type.
	 */
	public function findContactAddressByTypeId(
		int $contactId, 
		int $typeId, 
		bool $last = true
	):Address;

	/**
	 * Creates an address, associates it immediately with the given contact ID with
the given type and returns the new address.
	 */
	public function createAddress(
		array $data, 
		int $contactId, 
		int $typeId
	):Address;

	/**
	 * Updates the existing address of a given contact and type and returns it.
	 */
	public function updateAddress(
		array $data, 
		int $addressId, 
		int $contactId, 
		int $typeId
	):Address;

	/**
	 * Returns the address of a given contact and type.
	 */
	public function getAddress(
		int $addressId, 
		int $contactId, 
		int $typeId
	):Address;

	/**
	 * Gets all addresses for the given contact of the given type.
	 */
	public function getAddresses(
		int $contactId, 
		int $typeId = null
	):array;

	/**
	 * Adds the address to the given contact as the given type.
	 */
	public function addAddress(
		int $addressId, 
		int $contactId, 
		int $typeId
	):Address;

	/**
	 * Sets a contact address per address type as the primary address.
	 */
	public function setPrimaryAddress(
		int $addressId, 
		int $contactId, 
		int $addressTypeId
	):AddressContactRelation;

	/**
	 * Resets a contact primary address.
	 */
	public function resetPrimaryAddress(
		int $addressId, 
		int $contactId, 
		int $addressTypeId
	):AddressContactRelation;

	/**
	 * Returns true if contact has primary address of type
	 */
	public function hasPrimaryAddress(
		int $contactId, 
		int $addressTypeId
	):bool;

	/**
	 * Deletes an existing address of a given contact and type. Returns `true` if deletion was successful.
	 */
	public function deleteAddress(
		int $addressId, 
		int $contactId, 
		int $typeId
	):bool;

}
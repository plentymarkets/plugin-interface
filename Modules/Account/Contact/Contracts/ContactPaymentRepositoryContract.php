<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Account\Contact\Models\ContactBank;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ContactPaymentRepositoryContract is the interface for the contact payment repository.
 * This interface allows to list, get, create, update and delete bank details of the contact.
 */
interface ContactPaymentRepositoryContract 
{

	/**
	 * Gets a collection of bank accounts of a contact. The ID of the contact must be specified.
	 */
	public function getBanksOfContactPaginated(
		int $contactId, 
		array $columns = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

	/**
	 * Gets a collection of bank accounts of a contact. The ID of the contact must be specified.
	 */
	public function getBanksOfContact(
		int $contactId, 
		array $columns = [], 
		int $perPage = 50
	):array;

	/**
	 * Returns bank details of an order. The ID of the order must be specified.
	 */
	public function getBankByOrderId(
		int $orderId, 
		array $columns = []
	):ContactBank;

	/**
	 * Creates a bank account for a contact and returns it.
	 */
	public function createContactBank(
		array $data
	):ContactBank;

	/**
	 * Updates a bank account. The ID of the bank account must be specified.
	 */
	public function updateContactBank(
		array $data, 
		int $contactBankId
	):ContactBank;

	/**
	 * Deletes a bank account. The ID of the bank account must be specified.
	 */
	public function deleteContactBank(
		int $contactBankId
	):bool;

	/**
	 * Gets a bank account. The ID of the bank account must be specified.
	 */
	public function findContactBankById(
		int $contactBankId
	):ContactBank;

}
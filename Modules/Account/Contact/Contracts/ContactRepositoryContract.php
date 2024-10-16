<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Account\Contact\Search7\Filter\Complex\ContactSearchRequestFilters;
use Plenty\Modules\Data\History\Contracts\DataHistoryProviderContract;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Contracts\SortableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ContactRepositoryContract is the interface for the contact repository.
 * This interface allows to list, get, create, update and delete contacts. A contact is equivalent to a person.
 */
interface ContactRepositoryContract 
{

	/**
	 * Creates a contact and returns it.
	 */
	public function createContact(
		array $data
	):Contact;

	/**
	 * Updates a contact and returns it. The ID of the contact must be specified.
	 */
	public function updateContact(
		array $data, 
		int $contactId
	):Contact;

	/**
	 * Updates batch of contacts and returns them.
	 */
	public function batchUpdate(
		Collection $contactsBatch
	):bool;

	/**
	 * Updates the newsletter date from contact and returns it.
	 */
	public function updateNewsletterDate(
		int $contactId
	):Contact;

	/**
	 * Deletes a contact. The ID of the contact must be specified.
	 */
	public function deleteContact(
		int $contactId, 
		bool $checkExistingOrders = null
	):bool;

	/**
	 * Gets a contact. The ID of the contact must be specified.
	 */
	public function findContactById(
		int $contactId, 
		array $with = []
	):Contact;

	/**
	 * List contacts
	 */
	public function getContactList(
		array $filter = [], 
		array $with = [], 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		string $sortBy = "id", 
		string $sortOrder = "desc"
	):PaginatedResult;

	public function searchContacts(
		ContactSearchRequestFilters $filters, 
		array $with, 
		int $page, 
		int $itemsPerPage, 
		string $sortBy, 
		string $sortOrder
	):PaginatedResult;

	/**
	 * Returns an existing contact by a contact option information.
	 */
	public function getContactByOptionValue(
		string $value, 
		int $typeId, 
		int $subTypeId
	):Contact;

	/**
	 * Returns a contact id by email. The email must be specified.
	 */
	public function getContactIdByEmail(
		string $email, 
		array $filter = []
	):int;

	/**
	 * Returns all contact related data.
	 */
	public function findContactDataByContactId(
		int $contactId
	):Contact;

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

	public function getDataHistory(
		string $referenceType, 
		int $referenceId
	);

}
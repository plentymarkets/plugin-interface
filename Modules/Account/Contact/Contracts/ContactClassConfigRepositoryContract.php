<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Account\Contact\Models\ContactClass;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ContactClassConfigRepositoryContract is the interface
 * for managing the contact classes. This interface allows to list, delete, create,
 * update or get a contact class.
 */
interface ContactClassConfigRepositoryContract 
{

	/**
	 * Returns a collection of all contact classes.
	 */
	public function getContactClassesPaginated(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		string $sortBy = "id", 
		string $sortOrder = "desc", 
		array $filters = []
	):array;

	/**
	 * Return a ContactClass model based on class ID
	 */
	public function showContactClass(
		int $contactClassId
	):ContactClass;

	/**
	 * Creates a new contact class
	 */
	public function createContactClass(
		array $data
	):ContactClass;

	/**
	 * Updates an existing contact class
	 */
	public function updateContactClass(
		array $data, 
		int $contactClassId
	):ContactClass;

	/**
	 * Deletes a contact class
	 */
	public function deleteContactClass(
		int $contactClassId
	);

}
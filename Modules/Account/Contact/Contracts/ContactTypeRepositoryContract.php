<?php
namespace Plenty\Modules\Account\Contact\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Account\Contact\Models\ContactType;

/**
 * The ContactTypeRepositoryContract is the interface for the contact type repository. This interface allows to list, get, create, update and delete contact types.
 */
interface ContactTypeRepositoryContract 
{

	/**
	 * Creates a contact type and returns it.
	 */
	public function createContactType(
		array $data
	):ContactType;

	/**
	 * Updates a contact type and returns it. The ID of the contact type must be specified.
	 */
	public function updateContactType(
		array $data, 
		int $contactTypeId
	):ContactType;

	/**
	 * Deletes a contact type. The ID of the contact type must be specified. Returns `true` if deletion was successful. Returns `false` if deletion was not successful.
	 */
	public function deleteContactType(
		int $contactTypeId
	):bool;

	/**
	 * Gets a contact type. The ID of the contact type must be specified.
	 */
	public function findContactTypeById(
		int $contactTypeId
	):ContactType;

	/**
	 * Returns a collection of contact types.
	 */
	public function allContactTypes(
		array $columns = [], 
		string $sortBy = "id", 
		string $sortOrder = "asc"
	):array;

}
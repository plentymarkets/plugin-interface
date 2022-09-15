<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyOption;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property options.
 */
interface PropertyOptionRepositoryContract 
{

	/**
	 * Gets a list of property options. The ID of the property must be specified.
	 */
	public function searchByPropertyId(
		int $propertyId, 
		array $with = []
	):array;

	/**
	 * Gets a property option. The ID of the property option must be specified.
	 */
	public function get(
		int $id
	):PropertyOption;

	/**
	 * Updates a property option. The ID of the property option must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyOption;

	/**
	 * Creates a property option.
	 */
	public function create(
		array $data
	):PropertyOption;

	/**
	 * Deletes a property option. The ID of the property option must be specified.
	 */
	public function delete(
		int $id
	):bool;

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
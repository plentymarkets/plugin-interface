<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertySelection;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property selections.
 */
interface PropertySelectionRepositoryContract 
{

	/**
	 * Gets a list of property selections. The ID of the property must be specified.
	 */
	public function searchByPropertyId(
		int $propertyId, 
		array $with = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $sorting = []
	):array;

	/**
	 * Count the property selections. The ID of the property must be specified.
	 */
	public function countByPropertyId(
		int $propertyId
	):int;

	/**
	 * Gets a property selection. The ID of the property selection must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):PropertySelection;

	/**
	 * Updates a property selection. The ID of the property selection must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertySelection;

	/**
	 * Creates a property selection.
	 */
	public function create(
		array $data
	):PropertySelection;

	/**
	 * Deletes a property selection. The ID of the property selection must be specified.
	 */
	public function delete(
		int $id
	):bool;

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

}
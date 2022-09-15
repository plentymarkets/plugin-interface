<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyGroupOption;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property group options.
 */
interface PropertyGroupOptionRepositoryContract 
{

	/**
	 * Gets a list of property group options. The ID of the property group must be specified.
	 */
	public function findByGroupId(
		int $groupId
	):array;

	/**
	 * Gets a property group option. The ID of the property group option must be specified.
	 */
	public function get(
		int $id
	):PropertyGroupOption;

	/**
	 * Updates a property group option. The ID of the property group option must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyGroupOption;

	/**
	 * Creates a property group option.
	 */
	public function create(
		array $data
	):PropertyGroupOption;

	/**
	 * Deletes a property group option. The ID of the property group option must be specified.
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
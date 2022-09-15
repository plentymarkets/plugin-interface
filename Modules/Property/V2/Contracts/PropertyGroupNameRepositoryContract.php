<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyGroupName;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property group names.
 */
interface PropertyGroupNameRepositoryContract 
{

	/**
	 * Gets a list of property group names. The ID of the property group must be specified.
	 */
	public function findByGroupId(
		int $groupId
	):array;

	/**
	 * Gets a property group name. The ID of the property group name must be specified.
	 */
	public function get(
		int $id
	):PropertyGroupName;

	/**
	 * Updates a property group name. The ID of the property group name must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyGroupName;

	/**
	 * Creates a property group name.
	 */
	public function create(
		array $data
	):PropertyGroupName;

	/**
	 * Deletes a property group name. The ID of the property group name must be specified.
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
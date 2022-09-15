<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyGroup;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property groups.
 */
interface PropertyGroupRepositoryContract 
{

	/**
	 * Gets a list of property groups. Filter can be specified.
	 */
	public function search(
		array $with = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $sorting = []
	):array;

	/**
	 * Count the property groups.
	 */
	public function count(
	):int;

	/**
	 * Gets a property group. The ID of the property group must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):PropertyGroup;

	/**
	 * Updates a property group. The ID of the property group must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyGroup;

	/**
	 * Creates a property group.
	 */
	public function create(
		array $data
	):PropertyGroup;

	/**
	 * Deletes a property group. The ID of the property group must be specified.
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
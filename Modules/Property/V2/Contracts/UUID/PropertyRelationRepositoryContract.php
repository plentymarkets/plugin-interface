<?php
namespace Plenty\Modules\Property\V2\Contracts\UUID;

use Plenty\Modules\Property\V2\Models\UUID\PropertyRelation;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property relations.
 */
interface PropertyRelationRepositoryContract 
{

	/**
	 * Gets a list of property relation. Filter can be specified.
	 */
	public function search(
		array $with = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $sorting = []
	):array;

	/**
	 * Count the property relations.
	 */
	public function count(
	):int;

	/**
	 * Gets a property relation. The ID of the property relation must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):PropertyRelation;

	/**
	 * Updates a property relation. The ID of the property relation must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyRelation;

	/**
	 * Creates a property relation.
	 */
	public function create(
		array $data
	):PropertyRelation;

	/**
	 * Creates a list of property relations.
	 */
	public function createBulk(
		array $data
	):array;

	/**
	 * Updates a list of property relations.
	 */
	public function updateBulk(
		array $data
	):array;

	/**
	 * Deletes a property relation. The ID of the property relation must be specified.
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
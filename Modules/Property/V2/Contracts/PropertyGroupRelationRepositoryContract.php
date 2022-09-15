<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyGroupRelation;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create and delete property group relations.
 */
interface PropertyGroupRelationRepositoryContract 
{

	/**
	 * Gets a list of property group relations.
	 */
	public function search(
		array $with = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $sorting = []
	):array;

	/**
	 * Count the property group relations.
	 */
	public function count(
	):int;

	/**
	 * Gets a property group relation. The ID of the property group relation must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):PropertyGroupRelation;

	/**
	 * Creates a property group relation.
	 */
	public function create(
		array $data
	):PropertyGroupRelation;

	/**
	 * Updates or creates multiple property group relation.
	 */
	public function updateOrCreate(
		array $data
	):array;

	/**
	 * Deletes a property group relation. The ID of the property group relation must be specified.
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Deletes a property group relation. The ID of the property group relation must be specified.
	 */
	public function deleteMany(
		array $data
	):int;

	/**
	 * Gets a property group relation. The property ID and the group ID of the property group relation must be specified.
	 */
	public function findOne(
		int $propertyId, 
		int $groupId
	):PropertyGroupRelation;

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
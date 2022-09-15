<?php
namespace Plenty\Modules\Property\V2\Contracts\UUID;

use Plenty\Modules\Property\V2\Models\UUID\PropertyRelationValue;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property relation values. They are used for linked properties of the type `html` and `text`.
 */
interface PropertyRelationValueRepositoryContract 
{

	/**
	 * Gets a list of property relation values. The ID of the property relation must be specified.
	 */
	public function findByPropertyRelationId(
		int $propertyRelationId, 
		array $with = []
	):array;

	/**
	 * Gets a property relation value. The ID of the property relation value must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):PropertyRelationValue;

	/**
	 * Updates a property relation value. The ID of the property relation value must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyRelationValue;

	/**
	 * Creates a property relation value.
	 */
	public function create(
		array $data
	):PropertyRelationValue;

	/**
	 * Deletes a property relation value. The ID of the property relation value must be specified.
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
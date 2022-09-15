<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyName;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property names.
 */
interface PropertyNameRepositoryContract 
{

	/**
	 * Gets a list of property names. The ID of the property must be specified.
	 */
	public function findByPropertyId(
		int $propertyId
	):array;

	/**
	 * Gets a property name. The ID of the property name must be specified.
	 */
	public function get(
		int $id
	):PropertyName;

	/**
	 * Updates a property name. The ID of the property name must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyName;

	/**
	 * Creates a property name.
	 */
	public function create(
		array $data
	):PropertyName;

	/**
	 * Deletes a property name. The ID of the property name must be specified.
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
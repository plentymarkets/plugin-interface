<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyAmazon;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property amazons.
 */
interface PropertyAmazonRepositoryContract 
{

	public function search(
		array $with = [], 
		int $perPage = 50, 
		int $page = 1
	):array;

	/**
	 * Gets a list of property amazon. The ID of the property must be specified.
	 */
	public function findByPropertyId(
		int $propertyId
	):array;

	/**
	 * Gets a property amazon. The ID of the property amazon must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):PropertyAmazon;

	/**
	 * Updates a property amazon. The ID of the property amazon must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyAmazon;

	/**
	 * Creates a property amazon.
	 */
	public function create(
		array $data
	):PropertyAmazon;

	/**
	 * Deletes a property amazon. The ID of the property amazon must be specified.
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
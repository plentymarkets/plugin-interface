<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertyRelationSelection;
use Plenty\Repositories\Criteria\Criteria;

/**
 * This interface allows you to get, create, update and delete property relation selections.T hey are used for linked properties of the type `selection` and `multiSelection`.
 */
interface PropertyRelationSelectionRepositoryContract 
{

	/**
	 * Gets a list of property relation selections. The ID of the property relation must be specified.
	 */
	public function findByPropertyRelationId(
		int $propertyRelationId, 
		array $with = []
	):array;

	/**
	 * Gets a property relation selection. The ID of the property relation selection must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):PropertyRelationSelection;

	/**
	 * Updates a property relation selection. The ID of the property relation selection must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertyRelationSelection;

	/**
	 * Creates a property relation selection.
	 */
	public function create(
		array $data
	):PropertyRelationSelection;

	/**
	 * Deletes a property relation selection. The ID of the property relation selection must be specified.
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
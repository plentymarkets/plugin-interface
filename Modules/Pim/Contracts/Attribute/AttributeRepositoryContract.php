<?php
namespace Plenty\Modules\Pim\Contracts\Attribute;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Collection;
use Plenty\Modules\Item\Attribute\Models\Attribute;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the pim attribute repository
 */
interface AttributeRepositoryContract 
{

	/**
	 * Searches for attributes
	 */
	public function search(
		array $with = [], 
		int $page = 1, 
		int $perPage = 50
	):Collection;

	/**
	 * Updates a list of attributes
	 */
	public function update(
		array $data
	):Collection;

	/**
	 * Creates a list of attributes
	 */
	public function create(
		array $data
	):Collection;

	/**
	 * Deletes a list of attributes
	 */
	public function delete(
		array $data
	):Collection;

	/**
	 * Get one attribute by ID
	 */
	public function getById(
		int $id, 
		array $with = []
	):Attribute;

	/**
	 * Gets the total count of attributes
	 */
	public function getCount(
	):int;

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
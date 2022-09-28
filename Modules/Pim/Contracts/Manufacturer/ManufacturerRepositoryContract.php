<?php
namespace Plenty\Modules\Pim\Contracts\Manufacturer;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Collection;
use Plenty\Modules\Item\Manufacturer\Models\Manufacturer;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the pim manufacturer repository
 */
interface ManufacturerRepositoryContract 
{

	/**
	 * Search for manufacturer
	 */
	public function search(
		array $with = [], 
		int $page = 1, 
		int $perPage = 50
	):Collection;

	/**
	 * Create a list of manufacturer
	 */
	public function create(
		array $data
	):Collection;

	/**
	 * Update a list of manufacturer
	 */
	public function update(
		array $data
	):Collection;

	/**
	 * Delete a list of manufacturer
	 */
	public function delete(
		array $data
	):Collection;

	/**
	 * Get one manufacturer
	 */
	public function getById(
		int $id
	):Manufacturer;

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
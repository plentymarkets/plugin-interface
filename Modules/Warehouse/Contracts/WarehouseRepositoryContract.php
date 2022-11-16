<?php
namespace Plenty\Modules\Warehouse\Contracts;

use Plenty\Modules\Warehouse\Models\Warehouse;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;
use\Contracts;

/**
 * The interface for the warehouse repository
 */
interface WarehouseRepositoryContract 
{

	/**
	 * Gets a list of warehouses. Filter can be specified.
	 */
	public function search(
		int $perPage = 50, 
		int $page = 1, 
		array $with = []
	):PaginatedResult;

	/**
	 * Creates a warehouse.
	 */
	public function create(
		array $data
	):Warehouse;

	/**
	 * Updates a warehouse. The ID of the warehouse must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):Warehouse;

	/**
	 * Deletes a warehouse. The ID of the warehouse must be specified.
	 */
	public function delete(
		int $id, 
		int $newWarehouseId = -1
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
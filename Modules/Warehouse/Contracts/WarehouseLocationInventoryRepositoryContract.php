<?php
namespace Plenty\Modules\Warehouse\Contracts;

use Plenty\Modules\Warehouse\Models\WarehouseLocationInventory;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;
use\Contracts;

/**
 * Get, create, update and delete storage locations
 */
interface WarehouseLocationInventoryRepositoryContract 
{

	/**
	 * Get a storage location inventory
	 */
	public function getWarehouseLocationInventory(
		int $warehouseLocationInventory
	):WarehouseLocationInventory;

	/**
	 * Get a storage location inventory
	 */
	public function getWarehouseLocationInventoryList(
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		int $warehouseLocationId = null, 
		array $with = []
	):PaginatedResult;

	/**
	 * Create a storage location inventory
	 */
	public function createWarehouseLocationInventory(
		array $data
	):WarehouseLocationInventory;

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
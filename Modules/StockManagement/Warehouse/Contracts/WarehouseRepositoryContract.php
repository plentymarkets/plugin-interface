<?php
namespace Plenty\Modules\StockManagement\Warehouse\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\StockManagement\Warehouse\Models\Warehouse;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;
use\Contracts;

/**
 * The WarehouseRepositoryContract is the interface for the warehouse repository. This interface allows you to either get one warehouse by specifying the id or to list all warehouses.
 */
interface WarehouseRepositoryContract 
{

	/**
	 * Get a warehouse
	 */
	public function findById(
		int $warehouseId, 
		array $with = []
	):Warehouse;

	/**
	 * List warehouses
	 */
	public function all(
		array $with = [], 
		array $columns = []
	):array;

	/**
	 * Create a warehouse
	 */
	public function create(
		array $data
	):Warehouse;

	public function allPaginated(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = [], 
		array $with = []
	):PaginatedResult;

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
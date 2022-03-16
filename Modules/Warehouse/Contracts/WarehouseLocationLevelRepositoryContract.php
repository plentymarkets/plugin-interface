<?php
namespace Plenty\Modules\Warehouse\Contracts;

use Plenty\Modules\Warehouse\Models\WarehouseLocationLevel;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use\Contracts;

/**
 * Get, create, update and delete storage location levels
 */
interface WarehouseLocationLevelRepositoryContract 
{

	/**
	 * Get a storage location level
	 */
	public function getWarehouseLocationLevel(
		int $warehouseLocationLevel
	):WarehouseLocationLevel;

	/**
	 * Get a storage location level
	 */
	public function getWarehouseLocationLevelByName(
		string $warehouseLocationLevelName, 
		int $dimensionId, 
		int $parentId
	):WarehouseLocationLevel;

	/**
	 * Get a storage location level only by name.
	 */
	public function getWarehouseLocationLevelOnlyByName(
		string $warehouseLocationLevelName
	):WarehouseLocationLevel;

	/**
	 * Get a list of storage location levels
	 */
	public function listWarehouseLocationLevels(
		array $filters = [], 
		int $warehouseId = null
	):array;

	/**
	 * Create a storage location level
	 */
	public function createWarehouseLocationLevel(
		array $data, 
		bool $apiMode = false
	):WarehouseLocationLevel;

	/**
	 * Update a storage location level
	 */
	public function updateWarehouseLocationLevel(
		int $warehouseLocationLevel, 
		array $data
	):WarehouseLocationLevel;

	/**
	 * Delete a storage location level
	 */
	public function deleteWarehouseLocationLevel(
		int $warehouseLocationLevel
	);

	/**
	 * Get a warehouse structure.
	 */
	public function getWarehouseStructure(
		int $warehouseId, 
		array $data = []
	);

	/**
	 * Move a storage location level position
	 */
	public function moveWarehouseLocationLevelPosition(
		array $data
	);

	/**
	 * Get a warehouse structure moving.
	 */
	public function getWarehouseStructureMoving(
		int $warehouseId, 
		array $data
	);

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
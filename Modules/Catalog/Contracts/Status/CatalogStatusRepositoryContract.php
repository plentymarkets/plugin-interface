<?php
namespace Plenty\Modules\Catalog\Contracts\Status;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\Catalog\Models\Status\CatalogStatus;
use Plenty\Modules\Catalog\Services\Status\Run;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get, list, create, update and delete catalog statuses.
 */
interface CatalogStatusRepositoryContract 
{

	/**
	 * Create catalog status
	 */
	public function create(
		array $data
	);

	/**
	 * Get a catalog status
	 */
	public function get(
		int $id
	);

	/**
	 * Get the latest status of a specific catalog
	 */
	public function getLatestStatusOfCatalog(
		string $catalogId, 
		string $type = "run", 
		string $subtype = "async"
	):CatalogStatus;

	/**
	 * Get the latest status of a specific catalog with version
	 */
	public function getLatestStatusOfCatalogWithVersion(
		string $catalogId, 
		string $versionId, 
		string $type = "run", 
		string $subtype = "async"
	):CatalogStatus;

	/**
	 * List catalog statuses
	 */
	public function list(
		int $page = 1, 
		int $perPage = \Plenty\Modules\Catalog\Models\Status\CatalogStatus::ITEMS_PER_PAGE, 
		array $filters = []
	):PaginatedResult;

	/**
	 * Update catalog status
	 */
	public function update(
		int $id, 
		array $data
	);

	/**
	 * Delete catalog status
	 */
	public function delete(
		int $id
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
<?php
namespace Plenty\Modules\ElasticSync\Contracts\Core;

use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\ElasticSync\Models\Core\ElasticSyncSync;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * This interface allows you to get, list, create, update and delete elastic sync syncs.
 */
interface ElasticSyncSyncRepositoryContract 
{

	/**
	 * Create a sync.
	 */
	public function createSync(
		array $data
	);

	/**
	 * Get a sync.
	 */
	public function getSync(
		int $syncId, 
		array $with = []
	):array;

	/**
	 * Get all syncs
	 */
	public function listSyncs(
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		array $with = []
	):PaginatedResult;

	/**
	 * Update a sync.
	 */
	public function updateSync(
		int $syncId, 
		array $data
	);

	/**
	 * Delete a sync.
	 */
	public function deleteSync(
		int $syncId
	);

	/**
	 * Delete syncs.
	 */
	public function deleteSyncs(
		array $syncIds
	);

	/**
	 * Get list of sync types.
	 */
	public function getListTypes(
	):array;

	/**
	 * Get list of sync intervals.
	 */
	public function getListIntervals(
	):array;

	/**
	 * Get list of sync decimals.
	 */
	public function getListDecimals(
	):array;

	/**
	 * Export the syncs.
	 */
	public function export(
		array $syncIds
	):array;

	/**
	 * Copy the syncs.
	 */
	public function copy(
		array $syncIds
	):array;

	/**
	 * Reset the cache.
	 */
	public function resetCache(
	):array;

	/**
	 * Preview the syncs.
	 */
	public function sourcePreview(
		int $syncId
	):array;

	/**
	 * Get schedule times.
	 */
	public function scheduleTimes(
	):string;

	/**
	 * Check Report Log.
	 */
	public function getReportLogs(
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		array $with = []
	):PaginatedResult;

	/**
	 * Save the CSV on S3.
	 */
	public function saveCsvToS3(
		array $data
	);

	/**
	 * Import the sync with different plentyId.
	 */
	public function importSyncDifferent(
		array $data
	);

	/**
	 * Gets preview of csv values without sync entity.
	 */
	public function getCSVPreviewValues(
		array $data = []
	);

	/**
	 * Get preview of csv values.
	 */
	public function getPreviewValues(
		int $syncId
	):array;

	/**
	 * Execute the run procedure.
	 */
	public function run(
		int $syncId, 
		array $data
	);

	/**
	 * Execute the new run procedure.
	 */
	public function newRun(
		int $syncId, 
		array $data
	):array;

	/**
	 * Get Log by ID
	 */
	public function report(
		 $id
	):array;

	/**
	 * Check Report Log.
	 */
	public function reportAvailable(
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		array $with = []
	):array;

	/**
	 * Export the sync.
	 */
	public function exportSync(
		int $syncId
	):array;

	/**
	 * Get syncs status.
	 */
	public function syncStatus(
	):array;

	/**
	 * Update the Csv of a Sync.
	 */
	public function updateCsvSync(
		array $data
	);

	/**
	 * Save the CSV on S3.
	 */
	public function importSyncJson(
		array $data
	);

	/**
	 * Import the sync with different plentyId.
	 */
	public function importSyncJsonDifferent(
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
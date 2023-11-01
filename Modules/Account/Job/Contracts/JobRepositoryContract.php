<?php
namespace Plenty\Modules\Account\Job\Contracts;

use Plenty\Modules\Account\Exceptions\CRMCritical;
use Plenty\Modules\Account\Job\Models\Job;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The JobRepositoryContract is the interface for the job repository.
 * This interface allows to list, get, create, update and delete jobs.
 */
interface JobRepositoryContract 
{

	/**
	 * Create a job with given data
	 */
	public function createJob(
		array $jobData
	):Job;

	/**
	 * Delete a job by a given id. The ID of the job must be specified.
	 */
	public function deleteJob(
		int $jobId
	):bool;

	/**
	 * Update a job names with given data. The id of the job must be specified. Returns the job.
	 */
	public function updateJob(
		array $jobData, 
		int $jobId
	):Job;

	/**
	 * Get single job by id. The ID of the job must be specified.
	 */
	public function getJob(
		int $jobId
	):Job;

	/**
	 * Get paginated list of jobs
	 */
	public function getJobsList(
		int $page = 1, 
		int $itemsPerPage = 50, 
		string $sortBy = "id", 
		string $sortOrder = "desc", 
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
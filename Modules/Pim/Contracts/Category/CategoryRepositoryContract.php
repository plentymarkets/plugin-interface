<?php
namespace Plenty\Modules\Pim\Contracts\Category;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Collection;
use Plenty\Modules\Category\Models\Category;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the pim category repository
 */
interface CategoryRepositoryContract 
{

	/**
	 * Search for categories
	 */
	public function search(
		array $with = [], 
		int $page = 1, 
		int $perPage = 50, 
		array $sorting = []
	):Collection;

	/**
	 * Get one category by ID
	 */
	public function getById(
		int $id, 
		array $with = []
	):Category;

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
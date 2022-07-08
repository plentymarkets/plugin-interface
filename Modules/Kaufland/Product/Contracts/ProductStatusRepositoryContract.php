<?php
namespace Plenty\Modules\Kaufland\Product\Contracts;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Plenty\Modules\Kaufland\Product\Models\ProductStatus;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Get, list, create, update and delete product statuses.
 */
interface ProductStatusRepositoryContract 
{

	const ITEMS_PER_PAGE = 50;

	/**
	 * Create product status
	 */
	public function create(
		array $data
	);

	/**
	 * Get a product status
	 */
	public function get(
		int $id
	);

	/**
	 * List product statuses
	 */
	public function list(
		int $page = 1, 
		int $perPage = self::ITEMS_PER_PAGE, 
		array $filters = []
	):PaginatedResult;

	/**
	 * Update product status
	 */
	public function update(
		int $id, 
		array $data
	);

	/**
	 * Delete product status
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
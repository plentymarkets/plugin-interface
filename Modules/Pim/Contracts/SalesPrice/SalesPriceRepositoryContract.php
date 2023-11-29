<?php
namespace Plenty\Modules\Pim\Contracts\SalesPrice;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Collection;
use Plenty\Modules\Item\SalesPrice\Models\SalesPrice;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the pim sales price repository
 */
interface SalesPriceRepositoryContract 
{

	/**
	 * Searches for sales prices
	 */
	public function search(
		array $with = [], 
		int $page = 1, 
		int $perPage = 50, 
		array $sorting = []
	):Collection;

	/**
	 * Creates a list of sales prices
	 */
	public function create(
		array $data
	):Collection;

	/**
	 * Updates a list of sales prices
	 */
	public function update(
		array $data
	):Collection;

	/**
	 * Deletes a list of sales prices
	 */
	public function delete(
		array $data
	):Collection;

	/**
	 * Gets one sales price by ID
	 */
	public function getById(
		int $id, 
		array $with = []
	):SalesPrice;

	/**
	 * Gets the total count of sales prices
	 */
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
<?php
namespace Plenty\Modules\Item\ItemListingCategory\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Item\ItemListingCategory\Models\ItemListingCategory;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Search for item listing categories
 */
interface ItemListingCategoryRepositoryContract 
{

	/**
	 * Search for item listing categories
	 */
	public function search(
	):Collection;

	/**
	 * Gets one item listing category
	 */
	public function get(
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
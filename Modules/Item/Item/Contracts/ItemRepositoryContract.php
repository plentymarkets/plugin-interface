<?php
namespace Plenty\Modules\Item\Item\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Item\Item\Models\Item;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item repository
 */
interface ItemRepositoryContract 
{

	/**
	 * Creates an item.
	 */
	public function add(
		array $data
	);

	/**
	 * Get an item. The ID of the item must be specified.
	 */
	public function show(
		int $itemId, 
		array $columns = [], 
		string $lang = "de", 
		array $with = []
	);

	public function search(
		 $columns = [], 
		 $lang = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = []
	);

	/**
	 * Update a item. The ID of the item must be specified.
	 */
	public function update(
		array $data, 
		int $itemId
	):Item;

	/**
	 * Update up to 50 items. The ID of the item must be specified.
	 */
	public function bulkUpdate(
		array $data
	):Collection;

	/**
	 * Delete an item. The ID of the item must be specified.
	 */
	public function delete(
		int $itemId
	):DeleteResponse;

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
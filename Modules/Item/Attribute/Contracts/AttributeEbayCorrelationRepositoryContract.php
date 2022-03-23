<?php
namespace Plenty\Modules\Item\Attribute\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\Attribute\Models\AttributeEbayCorrelation;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the attribute ebay correlation repository
 */
interface AttributeEbayCorrelationRepositoryContract 
{

	/**
	 * Creates new ebay attribute correlation
	 */
	public function create(
		array $data
	):AttributeEbayCorrelation;

	/**
	 * Gets an ebay attribute correlation. The ID of the attribute correlation must be specified.
	 */
	public function show(
		int $id, 
		array $with = []
	):AttributeEbayCorrelation;

	/**
	 * Updates an ebay attribute correlation. The ID of the attribute correlation must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):AttributeEbayCorrelation;

	/**
	 * Deletes an ebay attribute correlation. The ID of the attribute correlation must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Gets an ebay attribute correlation. The ID of the attribute correlation must be specified.
	 */
	public function get(
		int $id
	):AttributeEbayCorrelation;

	/**
	 * Lists ebay attribute correlations by filters.
	 */
	public function search(
		int $perPage = 50, 
		int $page = 1, 
		array $filters = []
	):PaginatedResult;

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

}
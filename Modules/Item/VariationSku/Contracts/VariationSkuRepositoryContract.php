<?php
namespace Plenty\Modules\Item\VariationSku\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Item\VariationSku\Models\VariationSku;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation sku repository
 */
interface VariationSkuRepositoryContract 
{

	/**
	 * Generates or updates an SKU and parent SKU
	 */
	public function generateSkuWithParent(
		array $variation, 
		float $marketId, 
		int $accountId, 
		string $sku = null, 
		string $parentSku = null, 
		bool $setLastExportedTimestamp = true, 
		bool $returnObject = false
	);

	/**
	 * Generates or updates an SKU
	 */
	public function generateSku(
		int $variationId, 
		float $marketId, 
		int $accountId, 
		string $sku = null, 
		bool $setLastExportedTimestamp = true, 
		bool $returnObject = false
	);

	/**
	 * Creates an SKU
	 */
	public function create(
		array $data
	):VariationSku;

	/**
	 * Updates an SKU
	 */
	public function update(
		array $data, 
		int $skuId
	):VariationSku;

	/**
	 * Deletes an SKU
	 */
	public function delete(
		int $skuId
	):DeleteResponse;

	/**
	 * Gets an SKU
	 */
	public function show(
		int $skuId
	):VariationSku;

	/**
	 * Lists SKUs
	 */
	public function search(
		array $filter, 
		int $limit = null, 
		int $page = 1
	):array;

	/**
	 * Lists SKUs
	 */
	public function findByVariationId(
		int $variationId
	):array;

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
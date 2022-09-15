<?php
namespace Plenty\Modules\Item\VariationMarket\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationMarket\Models\VariationMarket;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract of the variation market repository
 */
interface VariationMarketRepositoryContract 
{

	/**
	 * Gets the data of a market linked to a variation. The ID of the market and the ID of the variation must be specified.
	 */
	public function findOne(
		int $variationId, 
		float $marketplaceId
	):VariationMarket;

	/**
	 * Creates a link between a market and a variation and adds market data.
	 */
	public function create(
		array $data
	):VariationMarket;

	/**
	 * Deletes the link between a market and a variation. The ID of the market and the ID of the variation must be specified.
	 */
	public function delete(
		int $marketplaceId, 
		float $variationId
	):DeleteResponse;

	/**
	 * Lists the markets linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationMarket;

	/**
	 * Lists the markets linked to a variation with inheritance details. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationMarket;

	/**
	 * Lists all links between variations and markets.
	 */
	public function getVariationMarkets(
		int $itemsPerPage = 50, 
		int $page = 1
	):PaginatedResult;

	/**
	 * Creates up to 50 links between variations and markets.
	 */
	public function createBulk(
		array $data
	):array;

	/**
	 * Deletes all market links of the variation specified.
	 */
	public function deleteBulk(
		int $itemId, 
		int $variationId
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
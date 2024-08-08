<?php
namespace Plenty\Modules\Item\VariationMarketIdentNumber\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationMarketIdentNumber\Models\VariationMarketIdentNumber;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation market ident number repository
 */
interface VariationMarketIdentNumberRepositoryContract 
{

	/**
	 * Gets a market ident number (ASIN/ePID) of a variation. The ID of the market ident number must be specified.
	 */
	public function show(
		int $variationMarketIdentNumberId
	):VariationMarketIdentNumber;

	/**
	 * Creates a new market ident number (ASIN/ePID) for a variation.
	 */
	public function create(
		array $data
	):VariationMarketIdentNumber;

	/**
	 * Updates a market ident number (ASIN/ePID) of a variation. The ID of the market ident number must be specified.
	 */
	public function update(
		array $data, 
		int $variationMarketIdentNumberId
	):VariationMarketIdentNumber;

	/**
	 * Deletes a market ident number (ASIN/ePID) of a variation. The ID of the market ident number must be specified.
	 */
	public function delete(
		int $variationMarketIdentNumberId, 
		int $variationId = null
	):DeleteResponse;

	/**
	 * Lists the market ident numbers (ASIN/ePID) of a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):array;

}
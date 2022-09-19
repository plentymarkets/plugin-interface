<?php
namespace Plenty\Modules\PriceCalculation\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Cloud\Storage\Exceptions\StorageException;
use Plenty\Modules\Core\Data\Exceptions\LazyLoaderException;
use Plenty\Modules\Core\Data\Exceptions\ModelFlattenerException;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The repository contract for the new price calculations
 */
interface PriceCalculationRepositoryContract 
{

	/**
	 * Creates or updates a price calculation
	 */
	public function createOrUpdate(
		string $id, 
		string $body
	):array;

	/**
	 * Gets a price calculation by the specified UUID
	 */
	public function get(
		string $id, 
		array $with = []
	):array;

	/**
	 * Gets a list of price calculations
	 */
	public function getList(
	);

	/**
	 * Deletes a price calculation with the specified UUID
	 */
	public function delete(
		string $id
	):DeleteResponse;

	public function uses(
		string $id, 
		string $type, 
		string $key
	):bool;

	/**
	 * Gets variations which use the specified price calculation. The price calculation UUID is required.
	 */
	public function getVariationsByPriceCalculationId(
		string $priceCalculationId
	):array;

}
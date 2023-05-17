<?php
namespace Plenty\Modules\PriceCalculation\Contracts;

use Exception;
use Plenty\Modules\Core\Data\Exceptions\LazyLoaderException;
use Plenty\Modules\Core\Data\Exceptions\ModelFlattenerException;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The repository contract for the price calculation errors
 */
interface PriceCalculationErrorRepositoryContract 
{

	public function get(
		string $id, 
		int $page, 
		int $itemsPerPage, 
		string $variationIds = null
	):PaginatedResult;

	public function getAll(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		string $variationIds = null
	):PaginatedResult;

	public function create(
		int $variationId, 
		int $formulaId, 
		string $uuid, 
		string $reason
	);

	public function delete(
		array $ids
	);

}
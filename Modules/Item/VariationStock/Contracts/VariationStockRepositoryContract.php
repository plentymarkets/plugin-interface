<?php
namespace Plenty\Modules\Item\VariationStock\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationStock\Models\VariationStock;
use Plenty\Modules\Item\VariationStock\Models\VariationStockMovement;
use Plenty\Modules\StockManagement\Stock\Models\StockStorageLocation;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract of the variation stock repository
 */
interface VariationStockRepositoryContract 
{

	/**
	 * List stock per warehouse
	 */
	public function listStockByWarehouse(
		int $variationId, 
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 200
	):array;

	/**
	 * List stock movements for a variation
	 */
	public function listStockMovements(
		int $variationId, 
		array $columns, 
		int $page, 
		int $itemsPerPage
	):array;

	/**
	 * Book incoming stock
	 */
	public function bookIncomingItems(
		int $variationId, 
		array $data
	):array;

	/**
	 * Book outgoing stock
	 */
	public function bookOutgoingItems(
		int $variationId, 
		array $data
	):array;

	/**
	 * Correct stock
	 */
	public function correctStock(
		int $variationId, 
		array $data, 
		bool $calcStockLater = false, 
		bool $finishReceiptLater = false, 
		bool $deactivateAutoTransaction = false
	):array;

	/**
	 * Redistribute stock
	 */
	public function redistributeStock(
		int $variationId, 
		array $data
	):PaginatedResult;

	/**
	 * Finish receipt
	 */
	public function finishReceipt(
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
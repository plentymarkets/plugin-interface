<?php
namespace Plenty\Modules\Item\VariationSku\Contracts;

use Plenty\Modules\Item\VariationSku\Models\VariationSku;

/**
 * The contract of the variation SKU bulk repository.
 */
interface VariationSkuBulkRepositoryContract 
{

	/**
	 * Creates multiple SKUs.
	 */
	public function create(
		array $data
	);

	/**
	 * Updates status for multiple SKUs.
	 */
	public function updateStatus(
		array $ids, 
		string $status
	);

	/**
	 * Updates exportedAt for multiple SKUs.
	 */
	public function updateExportedAt(
		array $ids, 
		string $time = ""
	);

	/**
	 * Updates stockUpdatedAt for multiple SKUs.
	 */
	public function updateStockUpdatedAt(
		array $ids, 
		string $time = ""
	);

	/**
	 * Updates deletedAt for multiple SKUs.
	 */
	public function updateDeletedAt(
		array $ids, 
		string $time = null
	);

	/**
	 * Deletes multiple SKUs.
	 */
	public function delete(
		array $data
	):int;

}
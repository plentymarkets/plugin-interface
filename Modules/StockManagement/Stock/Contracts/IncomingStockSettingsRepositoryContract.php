<?php
namespace Plenty\Modules\StockManagement\Stock\Contracts;

use Plenty\Modules\StockManagement\Stock\Models\IncomingStockSettings;

/**
 * Get or update incoming stock settings
 */
interface IncomingStockSettingsRepositoryContract 
{

	/**
	 * Get the incoming stock settings.
	 */
	public function get(
	):IncomingStockSettings;

	/**
	 * Update the incoming stock settings.
	 */
	public function update(
		array $data
	):IncomingStockSettings;

}
<?php
namespace Plenty\Modules\Order\Settings\Contracts;

use Plenty\Modules\Order\Settings\Models\OrderSettings;
use Plenty\Modules\Order\Settings\Models\StoreOrderSettings;

/**
 * Get settings for orders.
 */
interface OrderSettingsRepositoryContract 
{

	/**
	 * Get basic order settings
	 */
	public function get(
	):OrderSettings;

	/**
	 * Update basic order settings
	 */
	public function set(
		array $data
	):OrderSettings;

	/**
	 * Get order settings for store
	 */
	public function getStoreSettings(
		int $storeId
	):StoreOrderSettings;

}
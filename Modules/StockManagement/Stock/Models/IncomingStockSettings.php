<?php
namespace Plenty\Modules\StockManagement\Stock\Models;


/**
 * Configuration of incoming stock
 */
abstract class IncomingStockSettings 
{

	const PURCHASE_PRICE_NOT_TRANSFERRED = 0;

	const PURCHASE_PRICE_TRANSFERRED_TO_ITEM = 1;

	const PURCHASE_PRICE_TRANSFERRED_TO_ITEM_AND_DEALER = 2;

	const AVERAGE_PRICE_TRANSFERRED_TO_ITEM = 3;

	const MAXIMUM_PURCHASE_PRICE_TRANSFERRED_TO_ITEM = 4;

	const LOWEST_PRICE_TRANSFERRED_TO_ITEM = 5;

	const STORAGE_LOCATION_NOT_TRANSFERRED = 0;

	const STORAGE_LOCATION_TRANSFERRED_TO_ITEM = 1;

	const STORAGE_LOCATION_TRANSFERRED_TO_ITEM_IF_NOT_SET = 2;

	const STORAGE_LOCATION_NO_RESTRICTION_FOR_BATCH_BBD = 2;

	const STORAGE_LOCATION_ONLY_ONE_BATCH_BBD = 1;

	const STORAGE_LOCATION_ONLY_ONE_BATCH_BBD_FOR_VARIATION = 0;

	const WAREHOUSE_SEARCH_AVERAGE_PRICE = 0;

	const WAREHOUSE_SEARCH_ITEM_PURCHASE_PRICE = 1;

	const WAREHOUSE_SEARCH_ITEM_PURCHASE_PRICE_AVERAGE_PRICE = 2;

	const WAREHOUSE_SEARCH_MOVING_AVERAGE_PRICE = 3;

	const DELETE_STORAGE_LOCATION_AFTER_1_DAY = 1;

	const DELETE_STORAGE_LOCATION_AFTER_2_DAY = 2;

	const DELETE_STORAGE_LOCATION_AFTER_3_DAY = 3;

	const DELETE_STORAGE_LOCATION_AFTER_4_DAY = 4;

	const DELETE_STORAGE_LOCATION_AFTER_5_DAY = 5;

	const DELETE_STORAGE_LOCATION_AFTER_6_DAY = 6;

	const DELETE_STORAGE_LOCATION_AFTER_1_WEEK = 7;

	const DELETE_STORAGE_LOCATION_AFTER_2_WEEK = 14;

	const DELETE_STORAGE_LOCATION_AFTER_3_WEEK = 21;

	const DELETE_STORAGE_LOCATION_AFTER_1_MONTH = 30;

	const DELETE_STORAGE_LOCATION_AFTER_3_MONTH = 91;

	const DELETE_STORAGE_LOCATION_AFTER_HALF_YEAR = 183;

	const DELETE_STORAGE_LOCATION_AFTER_ONE_YEAR = 365;

	const DELETE_STORAGE_LOCATION_NEVER = 0;
	
public		$intakePurchasePriceTransferred;
	
public		$intakeStorageLocationTransferred;
	
public		$warehouseSearchPurchasePrice;
	
public		$intakeMaximumQuantity;
	
public		$deleteStorageLocationTime;
	
public		$invisibleStockEntryZeroTime;
	
public		$movingAveragePriceWarehouses;
	
public		$intakeCheckMultiBatchOfStorageLocation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
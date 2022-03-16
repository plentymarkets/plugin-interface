<?php
namespace Plenty\Modules\Warehouse\Models;


/**
 * The stocktaking journal model.
 */
abstract class InventoryJournal 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$warehouseLocationInventoryId;
	
public		$warehouseId;
	
public		$warehouseName;
	
public		$storageLocationId;
	
public		$storageLocationName;
	
public		$variationId;
	
public		$variationNumber;
	
public		$variationDescription;
	
public		$purchasePrice;
	
public		$movingAveragePrice;
	
public		$bestBeforeDate;
	
public		$batch;
	
public		$quantity;
	
public		$unit;
	
public		$userId;
	
public		$userName;
	
public		$origin;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
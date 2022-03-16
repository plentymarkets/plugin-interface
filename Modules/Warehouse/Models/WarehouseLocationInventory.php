<?php
namespace Plenty\Modules\Warehouse\Models;


/**
 * The storage location stocktaking model.
 */
abstract class WarehouseLocationInventory 
{

	const MAX_ITEMS_PER_PAGE = 100;

	const INVENTORY_STATUS_STARTED = 1;

	const INVENTORY_STATUS_FINISHED = 2;

	const INVENTORY_STATUS_CANCELED = 3;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$userId;
	
public		$user_id;
	
public		$status;
	
public		$warehouseLocationId;
	
public		$warehouse_location;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$warehouseLocation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
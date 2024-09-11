<?php
namespace Plenty\Modules\StockManagement\Warehouse\Models;


/**
 * The warehouse model in plentymarkets represents actual warehouses. Every warehouse is identified by an Id. Furthermore a warehouse is described by a name and is always associated with an address. This address may not only contain a physical address information like a street, a house number, a postal code and a town, but also an email address, a telephone number or a fax number.
 */
abstract class Warehouse 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$warehouseKeeperName;
	
public		$note;
	
public		$typeId;
	
public		$allocationReferrerIds;
	
public		$onStockAvailability;
	
public		$outOfStockAvailability;
	
public		$splitByShippingProfile;
	
public		$storageLocationType;
	
public		$storageLocationZone;
	
public		$repairWarehouseId;
	
public		$isInventoryModeActive;
	
public		$logisticsType;
	
public		$address;
	
public		$repairWarehouse;
	
public		$updatedAt;
	
public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
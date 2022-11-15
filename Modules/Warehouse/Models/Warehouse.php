<?php
namespace Plenty\Modules\Warehouse\Models;


/**
 * The warehouse model in plentymarkets represents actual warehouses. Every warehouse is identified by an Id. Furthermore a warehouse is described by a name and is always associated with an address. This address may not only contain a physical address information like a street, a house number, a postal code and a town, but also an email address, a telephone number or a fax number.
 */
abstract class Warehouse 
{

	const TYPE_SALES = 0;

	const TYPE_REPAIR = 1;

	const TYPE_STORAGE = 4;

	const TYPE_TRANSIT = 5;

	const TYPE_DISTRIBUTION = 6;

	const TYPE_OTHER = 7;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
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
<?php
namespace Plenty\Modules\Warehouse\Models;


/**
 * The storage location level model.
 */
abstract class WarehouseLocationLevel 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$parentId;
	
public		$dimensionId;
	
public		$position;
	
public		$name;
	
public		$type;
	
public		$pathName;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$parent;
	
public		$children;
	
public		$warehouseLocation;
	
public		$warehouseLocationDimension;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
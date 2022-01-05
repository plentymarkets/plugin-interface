<?php
namespace Plenty\Modules\Fulfillment\Picklist\Models;


/**
 * Represent a picking order
 */
abstract class PickingOrder 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$createdAt;
	
public		$processDate;
	
public		$doneDate;
	
public		$ownerId;
	
public		$processUserId;
	
public		$processState;
	
public		$webstoreId;
	
public		$warehouseId;
	
public		$comment;
	
public		$filterOptions;
	
public		$pickingOrderItems;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
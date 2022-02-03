<?php
namespace Plenty\Modules\Order\RepairReason\Models;


/**
 * The repair reason name model.
 */
abstract class RepairReasonName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$reason;
	
public		$lang;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
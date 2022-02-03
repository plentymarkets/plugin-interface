<?php
namespace Plenty\Modules\Order\RepairStatus\Models;


/**
 * The repair status name model.
 */
abstract class RepairStatusName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$status;
	
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
<?php
namespace Plenty\Modules\Order\RepairStatus\Models;


/**
 * The repair status model.
 */
abstract class RepairStatus 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$status;
	
public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
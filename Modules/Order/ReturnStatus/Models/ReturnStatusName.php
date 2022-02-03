<?php
namespace Plenty\Modules\Order\ReturnStatus\Models;


/**
 * The return status name model.
 */
abstract class ReturnStatusName 
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
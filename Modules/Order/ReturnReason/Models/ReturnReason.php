<?php
namespace Plenty\Modules\Order\ReturnReason\Models;


/**
 * The return reason model.
 */
abstract class ReturnReason 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$reason;
	
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
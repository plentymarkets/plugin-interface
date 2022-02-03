<?php
namespace Plenty\Modules\Order\ReturnReason\Models;


/**
 * The return reason name model.
 */
abstract class ReturnReasonName 
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
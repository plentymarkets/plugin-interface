<?php
namespace Plenty\Modules\Order\ReturnOrder\Settings\Models;


/**
 * The model of the return order settings.
 */
abstract class ReturnOrderSettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$defaultOrderStatus;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
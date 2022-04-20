<?php
namespace Plenty\Modules\Order\Repair\Settings\Models;


/**
 * The model of the repair order settings.
 */
abstract class RepairSettings 
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
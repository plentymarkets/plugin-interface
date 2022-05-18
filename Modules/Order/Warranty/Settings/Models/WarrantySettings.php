<?php
namespace Plenty\Modules\Order\Warranty\Settings\Models;


/**
 * The model of the warranty order settings.
 */
abstract class WarrantySettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$setShippingCostsToZero;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
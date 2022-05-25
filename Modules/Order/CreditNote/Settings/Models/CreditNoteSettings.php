<?php
namespace Plenty\Modules\Order\CreditNote\Settings\Models;


/**
 * The model of the creditNote order settings.
 */
abstract class CreditNoteSettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$defaultOrderStatus;
	
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
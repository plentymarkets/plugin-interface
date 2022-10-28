<?php
namespace Plenty\Modules\Order\Shipping\Pallet\Models;


/**
 * The order shipping pallet model.
 */
abstract class OrderShippingPallet 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$weight;
	
public		$individualWeight;
	
public		$width;
	
public		$height;
	
public		$length;
	
public		$isStackable;
	
public		$additionalInfo;
	
public		$barcode;
	
public		$isClosed;
	
public		$palletSscc;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Order\Shipping\PackageType\Models;


/**
 * The shipping package type model.
 */
abstract class ShippingPackageType 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$width;
	
public		$individualWeight;
	
public		$height;
	
public		$length;
	
public		$unit;
	
public		$maxWeight;
	
public		$maxVolume;
	
public		$volumeType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Order\Shipping\Countries\Models;


/**
 * The country model representing a country with allocated states and a list of names in different languages.
 */
abstract class Country 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$shippingDestinationId;
	
public		$active;
	
public		$storehouseId;
	
public		$isoCode2;
	
public		$isoCode3;
	
public		$lang;
	
public		$isCountryStateMandatory;
	
public		$states;
	
public		$names;
	
public		$vatCodes;
	
public		$region;
	
public		$currencies;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
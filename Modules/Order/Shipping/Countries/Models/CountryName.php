<?php
namespace Plenty\Modules\Order\Shipping\Countries\Models;


/**
 * The CountryName model containing a name of a country in a specified language.
 */
abstract class CountryName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$language;
	
public		$name;
	
public		$country_id;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
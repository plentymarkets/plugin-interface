<?php
namespace Plenty\Modules\Item\VariationProperty\Models;


/**
 * The variation property value text model. Includes language specific information for a variation property value.
 */
abstract class VariationPropertyValueText 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$valueId;
	
public		$lang;
	
public		$value;
	
public		$characteristic;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
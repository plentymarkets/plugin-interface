<?php
namespace Plenty\Modules\Item\VariationProperty\Models;


/**
 * The variation property value model. Represents a link between characteristic and item.
 */
abstract class VariationPropertyValue 
{

	const ITEMS_PER_PAGE = 50;

	const UPDATED_AT = 'last_update_timestamp';

	const CREATED_AT = 'created_timestamp';
	
public		$id;
	
public		$variationId;
	
public		$propertyId;
	
public		$propertySelectionId;
	
public		$valueInt;
	
public		$valueFloat;
	
public		$valueFile;
	
public		$surcharge;
	
public		$names;
	
public		$property;
	
public		$propertySelection;
	
public		$valueTexts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
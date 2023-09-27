<?php
namespace Plenty\Modules\Property\V2\Models\UUID;


/**
 * The property uuid relation model.
 */
abstract class PropertyRelation 
{

	const PROPERTY_RELATION_TYPE_CONTACT = 'contact';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$propertyId;
	
public		$type;
	
public		$targetId;
	
public		$groupId;
	
public		$markup;
	
public		$value;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
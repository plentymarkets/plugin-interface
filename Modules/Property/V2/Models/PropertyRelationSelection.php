<?php
namespace Plenty\Modules\Property\V2\Models;


/**
 * The property relation selection value model. Includes the values in different languages for properties of the type short text and long text.
 */
abstract class PropertyRelationSelection 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$relationId;
	
public		$selectionId;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$relation;
	
public		$selection;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
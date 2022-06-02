<?php
namespace Plenty\Modules\Tag\V2\Models;


/**
 * The V2 tag model.
 */
abstract class Tag 
{

	const TAG_AVAILABILITIES_RELATION = 'availabilities';

	const TAG_NAMES_RELATION = 'names';

	const TAG_CLIENTS_RELATION = 'clients';

	const ALLOWED_RELATIONS = ['availabilities','names','clients'];

	const TYPE_CONTACT = 'contact';

	const TYPE_ITEM = 'item';

	const AVAILABLE_TYPES = ['contact','item'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$color;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$names;
	
public		$clients;
	
public		$availabilities;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
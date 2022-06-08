<?php
namespace Plenty\Modules\Tag\V2\Models;


/**
 * The V2 tag name model.
 */
abstract class TagName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$tagId;
	
public		$name;
	
public		$lang;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$tag;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
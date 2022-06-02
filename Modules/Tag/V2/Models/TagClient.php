<?php
namespace Plenty\Modules\Tag\V2\Models;


/**
 * The V2 tag client model.
 */
abstract class TagClient 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$tagId;
	
public		$plentyId;
	
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
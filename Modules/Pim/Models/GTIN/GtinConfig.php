<?php
namespace Plenty\Modules\Pim\Models\GTIN;


/**
 * the gtin config model
 */
abstract class GtinConfig 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$current;
	
public		$hasNext;
	
public		$last;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Context;


/**
 * This class represents an object entry with the object type and the object itself.
 */
abstract class ObjectEntry 
{
	
public		$objectType;
	
public		$object;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
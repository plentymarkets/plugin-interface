<?php
namespace Plenty\Modules\Document\Builder\Variables\Models;


/**
 * The base class for dynamically detected variables.
 */
abstract class DynamicVariable 
{

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
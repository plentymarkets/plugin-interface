<?php
namespace Plenty\Modules\Document\Builder\Variables\Models;


/**
 * A variable group that can be used to register dynamically determined variables.
 */
abstract class DynamicVariableGroup 
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
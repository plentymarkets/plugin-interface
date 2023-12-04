<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Context;


/**
 * This class can be used by variables to get the needed objects and to push resolved variable content.
 */
abstract class VariablesResolution 
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
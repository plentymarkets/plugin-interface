<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Variables\AddressGroup;


/**
 * The address option variable, that indicates if the address is packstation
 */
abstract class IsPackstationVariable 
{

	const IDENTIFIER = 'IsPackstation';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
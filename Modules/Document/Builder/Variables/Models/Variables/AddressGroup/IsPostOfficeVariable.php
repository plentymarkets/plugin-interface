<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Variables\AddressGroup;


/**
 * The address option variable, that indicates if the address is post office
 */
abstract class IsPostOfficeVariable 
{

	const IDENTIFIER = 'IsPostOffice';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
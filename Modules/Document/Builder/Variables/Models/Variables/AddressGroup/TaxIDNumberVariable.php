<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Variables\AddressGroup;


/**
 * The tax id number address option variable (only for invoice and delivery address)
 */
abstract class TaxIDNumberVariable 
{

	const IDENTIFIER = 'TaxIDNumber';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Variables\AddressGroup;


/**
 * The external address ID address option variable (only for invoice and delivery address)
 */
abstract class ExternalAddressIDVariable 
{

	const IDENTIFIER = 'ExternalAddressID';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
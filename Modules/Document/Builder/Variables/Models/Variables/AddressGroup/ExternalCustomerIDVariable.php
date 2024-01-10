<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Variables\AddressGroup;


/**
 * The external customer ID address option variable (only for invoice and delivery address)
 */
abstract class ExternalCustomerIDVariable 
{

	const IDENTIFIER = 'ExternalCustomerID';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
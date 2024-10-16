<?php
namespace Plenty\Modules\Account\Contact\Search7\Filter\Complex;


/**
 * Represent the request filters model for searching contacts
 */
abstract class ContactSearchRequestFilters 
{

	const AND_CONDITION_TYPE = 'and';

	const OR_CONDITION_TYPE = 'or';
	
public		$conditionType;
	
public		$fields;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
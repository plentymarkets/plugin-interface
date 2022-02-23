<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay takeBack policy model
 */
abstract class TakeBackPolicy 
{
	
public		$customPolicyId;
	
public		$description;
	
public		$policyType;
	
public		$name;
	
public		$label;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
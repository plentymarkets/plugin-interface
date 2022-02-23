<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay productCompliance policy model
 */
abstract class ProductCompliancePolicy 
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
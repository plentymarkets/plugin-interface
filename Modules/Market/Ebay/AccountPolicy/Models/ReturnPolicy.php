<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Models;


/**
 * The eBay return policy model
 */
abstract class ReturnPolicy 
{
	
public		$returnPolicyId;
	
public		$categoryTypes;
	
public		$description;
	
public		$extendedHolidayReturnsOffered;
	
public		$marketplaceId;
	
public		$name;
	
public		$refundMethod;
	
public		$restockingFeePercentage;
	
public		$returnInstruction;
	
public		$returnInstructions;
	
public		$returnMethod;
	
public		$returnPeriod;
	
public		$returnsAccepted;
	
public		$returnShippingCostPayer;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
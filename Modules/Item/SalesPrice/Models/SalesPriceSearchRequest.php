<?php
namespace Plenty\Modules\Item\SalesPrice\Models;


/**
 * SalesPriceSearchRequest DataModel
 */
abstract class SalesPriceSearchRequest 
{
	
public		$variationId;
	
public		$type;
	
public		$plentyId;
	
public		$customerClassId;
	
public		$countryId;
	
public		$currency;
	
public		$accountId;
	
public		$accountType;
	
public		$referrerId;
	
public		$quantity;
	
public		$ignoreType;
	
public		$vatId;
	
public		$customsTariffNumber;
	
public		$defaultPriceOnly;
	
public		$itemQuantityList;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
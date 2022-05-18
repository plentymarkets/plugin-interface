<?php
namespace Plenty\Modules\Item\SalesPrice\Models;


/**
 * SalesPriceSearchResponse
 */
abstract class SalesPriceSearchResponse 
{
	
public		$salesPriceId;
	
public		$price;
	
public		$priceNet;
	
public		$basePrice;
	
public		$basePriceNet;
	
public		$unitPrice;
	
public		$unitPriceNet;
	
public		$lowestPrice;
	
public		$lowestPriceNet;
	
public		$customerClassDiscountPercent;
	
public		$customerClassDiscount;
	
public		$customerClassDiscountNet;
	
public		$categoryDiscountPercent;
	
public		$categoryDiscount;
	
public		$categoryDiscountNet;
	
public		$vatId;
	
public		$vatValue;
	
public		$currency;
	
public		$interval;
	
public		$conversionFactor;
	
public		$minimumOrderQuantity;
	
public		$updatedAt;
	
public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
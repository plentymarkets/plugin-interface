<?php
namespace Plenty\Modules\Item\VariationSalesPrice\Models;


/**
 * VariationSalesPrice
 */
abstract class VariationSalesPrice 
{

	const ITEMS_PER_PAGE = 100;

	const UPDATED_AT = 'plenty_item_variation_retail_price_last_update_timestamp';

	const CREATED_AT = 'plenty_item_variation_retail_price_insert_timestamp';
	
public		$variationId;
	
public		$salesPriceId;
	
public		$price;
	
public		$lowestPrice;
	
public		$lowestPriceCalculation;
	
public		$updatedAt;
	
public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
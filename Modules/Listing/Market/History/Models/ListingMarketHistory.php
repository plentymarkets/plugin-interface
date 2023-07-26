<?php
namespace Plenty\Modules\Listing\Market\History\Models;


/**
 * The listing market history model.
 */
abstract class ListingMarketHistory 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$listingMarketId;
	
public		$referrerId;
	
public		$externalId;
	
public		$statusId;
	
public		$quantity;
	
public		$quantitySold;
	
public		$quantitySoldDelta;
	
public		$quantityRemain;
	
public		$price;
	
public		$currency;
	
public		$sku;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$hasStockReservationForEbay;
	
public		$listingMarket;
	
public		$variations;
	
public		$properties;
	
public		$dates;
	
public		$texts;
	
public		$status;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
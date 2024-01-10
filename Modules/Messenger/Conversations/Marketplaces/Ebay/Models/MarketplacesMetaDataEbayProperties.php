<?php
namespace Plenty\Modules\Messenger\Conversations\Marketplaces\Ebay\Models;


/**
 * The Ebay properties model of the messenger.
 */
abstract class MarketplacesMetaDataEbayProperties 
{
	
public		$ebayCreatedAt;
	
public		$ebaySenderName;
	
public		$ebayMessageId;
	
public		$ebayExternalMessageId;
	
public		$ebaySellerName;
	
public		$ebayItemId;
	
public		$ebayItemEndTime;
	
public		$ebayType;
	
public		$ebayResponseEnabled;
	
public		$ebayAccountId;
	
public		$ebayMessengerAccountId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
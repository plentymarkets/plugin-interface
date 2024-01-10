<?php
namespace Plenty\Modules\Messenger\Conversations\Marketplaces\Ebay\Models;


/**
 * The Ebay Settings model of the messenger.
 */
abstract class EbayAccount 
{
	
public		$id;
	
public		$ebayAccountId;
	
public		$name;
	
public		$isEnabled;
	
public		$isDeleted;
	
public		$settings;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
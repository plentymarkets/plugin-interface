<?php
namespace Plenty\Modules\Messenger\Conversations\Marketplaces\Ebay\Models;


/**
 * The EbayAccount's settings model of the messenger.
 */
abstract class Settings 
{
	
public		$markAsRead;
	
public		$defaultStatus;
	
public		$defaultType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
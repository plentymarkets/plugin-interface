<?php
namespace Plenty\Modules\Messenger\Settings\Inboxes\Marketplaces\Models;


/**
 * The marketplaces data model of the messenger.
 */
abstract class MessageMarketplacesMetaDataNew 
{
	
public		$ebayProperties;
	
public		$amazonProperties;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
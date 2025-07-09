<?php
namespace Plenty\Modules\Messenger\Conversations\Marketplaces\Models;


/**
 * The marketplaces data model of the messenger.
 */
abstract class MessageMarketplacesMetaData 
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
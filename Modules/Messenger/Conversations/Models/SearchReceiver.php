<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The Conversation model of the messenger.
 */
abstract class SearchReceiver 
{
	
public		$id;
	
public		$name;
	
public		$email;
	
public		$lang;
	
public		$externalId;
	
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
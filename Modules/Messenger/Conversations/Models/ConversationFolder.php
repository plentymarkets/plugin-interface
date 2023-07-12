<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The Conversation model of the messenger.
 */
abstract class ConversationFolder 
{
	
public		$uuid;
	
public		$name;
	
public		$userId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
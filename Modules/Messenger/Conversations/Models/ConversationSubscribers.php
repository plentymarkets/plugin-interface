<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationSubscribers model of the messenger.
 */
abstract class ConversationSubscribers 
{
	
public		$userIds;
	
public		$roleIds;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
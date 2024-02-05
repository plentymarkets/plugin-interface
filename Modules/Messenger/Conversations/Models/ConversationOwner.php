<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationOwners model of the messenger.
 */
abstract class ConversationOwner 
{
	
public		$roleId;
	
public		$ownerId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
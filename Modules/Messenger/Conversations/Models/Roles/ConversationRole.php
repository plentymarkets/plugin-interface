<?php
namespace Plenty\Modules\Messenger\Conversations\Models\Roles;


/**
 * The ConversationRole model of the messenger.
 */
abstract class ConversationRole 
{
	
public		$position;
	
public		$userId;
	
public		$isDeleted;
	
public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
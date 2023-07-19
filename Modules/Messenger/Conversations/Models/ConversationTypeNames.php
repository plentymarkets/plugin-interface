<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationTypeNames model of the messenger.
 */
abstract class ConversationTypeNames 
{
	
public		$lang;
	
public		$name;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationCategoryNames model of the messenger.
 */
abstract class ConversationCategoryNames 
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
<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationFolderProperty model of the messenger.
 */
abstract class ConversationFolderProperty 
{
	
public		$userId;
	
public		$foldersUuids;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
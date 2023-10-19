<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationType model of the messenger.
 */
abstract class ConversationType 
{
	
public		$names;
	
public		$statuses;
	
public		$id;
	
public		$position;
	
public		$userId;
	
public		$isDeleted;
	
public		$categoryId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
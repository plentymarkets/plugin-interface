<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationCategory model of the messenger.
 */
abstract class ConversationCategory 
{

	const LAST_RESERVED_ID = 100;

	const EMPTY_CATEGORY_ID = 0;

	const EMPTY_CATEGORY_POSITION = 0;

	const DEFAULT_CATEGORY_ID = 1;

	const DEFAULT_CATEGORY_POSITION = 1;

	const EBAY_CATEGORY_ID = 2;

	const EBAY_CATEGORY_POSITION = 2;

	const CUSTOMER_NOTES_CATEGORY_ID = 3;

	const CUSTOMER_NOTES_CATEGORY_POSITION = 3;
	
public		$names;
	
public		$types;
	
public		$id;
	
public		$position;
	
public		$userId;
	
public		$icon;
	
public		$iconType;
	
public		$isDeleted;
	
public		$isEnabled;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationFrom model of the messenger.
 */
abstract class ConversationFrom 
{

	const FROM_TYPE_USER = 'user';

	const FROM_TYPE_CONTACT = 'contact';

	const FROM_TYPE_EMAIL = 'email';
	
public		$type;
	
public		$value;
	
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
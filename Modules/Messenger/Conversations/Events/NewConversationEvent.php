<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when a new conversation is created by a user (via UI or REST API).
 */
abstract class NewConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
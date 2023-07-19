<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when a new conversation is created by a customer (received via inbox).
 */
abstract class NewEmailFromCustomerConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
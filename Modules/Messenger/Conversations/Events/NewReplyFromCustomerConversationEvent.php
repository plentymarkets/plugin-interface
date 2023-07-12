<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when the customer replyes to an existing conversation (reply received via inbox).
 */
abstract class NewReplyFromCustomerConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
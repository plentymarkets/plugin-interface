<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when an user replyes to an existing conversation (via UI or REST API).
 */
abstract class NewReplyConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
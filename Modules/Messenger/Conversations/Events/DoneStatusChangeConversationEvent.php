<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when the conversation is marked as done/not done.
 */
abstract class DoneStatusChangeConversationEvent 
{

	abstract public function getConversationUUIDs(
	);

	abstract public function getConversationUUID(
	);

}
<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when the conversation is marked as read.
 */
abstract class MarkAsReadConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
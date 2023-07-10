<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when the conversation status is changed.
 */
abstract class StatusChangeConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
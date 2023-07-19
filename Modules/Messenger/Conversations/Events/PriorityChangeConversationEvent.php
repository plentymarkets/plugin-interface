<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when the conversation priority is changed.
 */
abstract class PriorityChangeConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when the conversation deadline is changed.
 */
abstract class DeadlineChangeConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
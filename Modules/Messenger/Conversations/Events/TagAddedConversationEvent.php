<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when a tag is added to a conversation.
 */
abstract class TagAddedConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when a tag is removed from a conversation.
 */
abstract class TagRemovedConversationEvent 
{

	abstract public function getConversationUUID(
	);

}
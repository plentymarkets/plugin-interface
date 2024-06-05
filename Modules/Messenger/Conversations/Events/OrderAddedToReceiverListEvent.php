<?php
namespace Plenty\Modules\Messenger\Conversations\Events;


/**
 * The event is triggered when the order is added to the receiver list of an existing conversation.
 */
abstract class OrderAddedToReceiverListEvent 
{

	abstract public function getConversationUUID(
	);

}
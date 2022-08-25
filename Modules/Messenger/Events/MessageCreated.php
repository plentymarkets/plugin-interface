<?php
namespace Plenty\Modules\Messenger\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Plenty\Modules\Messenger\Models\Message;
use Plenty\Modules\Messenger\Services\NewMessengerStatusService;

/**
 * The event is triggered after a new message was created.
 */
abstract class MessageCreated 
{

	/**
	 * If TRUE, the message is the first one. Otherwise, it is a reply message.
	 */
	abstract public function isFirstMessage(
	):bool;

	abstract public function broadcastWhen(
	);

	/**
	 * Get the message.
	 */
	abstract public function getMessage(
	):Message;

}
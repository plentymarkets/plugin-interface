<?php
namespace Plenty\Modules\Order\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Plenty\Modules\Broadcasting\Traits\WebhookBroadcasting;
use Plenty\Modules\Order\Facades\OrderCache;
use Plenty\Modules\Order\Models\Order;

/**
 * A base event class for all order events. Each order event expects an order instance.
 */
abstract class OrderEvent 
{

	/**
	 * OrderEvent constructor.
	 */
	abstract public function __construct(
		Order $order
	);

	/**
	 * Get the order instance.
	 */
	abstract public function getOrder(
	):Order;

	abstract public function broadcastAs(
	);

	abstract public function broadcastPayload(
	);

	abstract public function getWebstoreId(
	);

	abstract public function broadcastWhen(
	);

	abstract public function broadcastConnections(
	);

	abstract public function broadcastOn(
	);

	abstract public function broadcastWith(
	);

}
<?php
namespace Plenty\Modules\Order\Events;

use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired after a new order for a subscription is created. The order type is not relevant.
 * 	At the same time also type depended events will be fired, like ReturnsCreated or CreditNoteCreated.
 */
abstract class SubscriptionChildOrderCreated extends \Plenty\Modules\Order\Events\OrderEvent 

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
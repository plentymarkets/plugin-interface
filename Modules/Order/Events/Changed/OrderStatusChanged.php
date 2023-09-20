<?php
namespace Plenty\Modules\Order\Events\Changed;

use Plenty\Modules\Order\Events\OrderEvent;
use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired after the status of an order has changed.
 */
abstract class OrderStatusChanged extends \Plenty\Modules\Order\Events\OrderEvent 

{

	/**
	 * OrderStatusChanged constructor.
	 */
	abstract public function __construct(
		Order $order, 
		float $oldStatus
	);

	/**
	 * Get the old order status.
	 */
	abstract public function getOldStatus(
	):float;

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
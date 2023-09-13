<?php
namespace Plenty\Modules\Order\Events\Canceled;

use Plenty\Modules\Order\Events\OrderEvent;
use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired after an order is canceled.
 */
abstract class AfterOrderCanceled extends \Plenty\Modules\Order\Events\OrderEvent 

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
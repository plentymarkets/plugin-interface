<?php
namespace Plenty\Modules\Order\Events\Created;

use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired after a new warranty is created.
 */
abstract class WarrantyCreated extends \Plenty\Modules\Order\Events\OrderCreated 

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
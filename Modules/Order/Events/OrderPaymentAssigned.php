<?php
namespace Plenty\Modules\Order\Events;

use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Payment\Models\Payment;

/**
 * An Event class fired after a payment was assigned to an order.
 * After this event one of the following events will be fired, depending the payment status of the order:
 *	 OrderPrepaid, OrderPartlyPaid, OrderFullyPaid, OrderOverpaid.
 */
abstract class OrderPaymentAssigned extends \Plenty\Modules\Order\Events\OrderEvent 

{

	/**
	 * OrderPaymentAssigned constructor.
	 */
	abstract public function __construct(
		Order $order, 
		Payment $payment
	);

	/**
	 * Get the payment.
	 */
	abstract public function getPayment(
	):Payment;

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
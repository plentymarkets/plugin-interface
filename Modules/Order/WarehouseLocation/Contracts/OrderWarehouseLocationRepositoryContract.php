<?php
namespace Plenty\Modules\Order\WarehouseLocation\Contracts;


/**
 * The OrderWarehouseLocationRepositoryContract is the interface for the order warehouse location repository. This interface allows you to attach and detach warehouse locations.
 */
interface OrderWarehouseLocationRepositoryContract 
{

	/**
	 * Attach warehouse locations.
	 */
	public function attach(
		int $orderId
	);

	/**
	 * Detach warehouse locations.
	 */
	public function detach(
		int $orderId
	);

}
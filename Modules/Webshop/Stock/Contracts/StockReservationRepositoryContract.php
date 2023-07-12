<?php
namespace Plenty\Modules\Webshop\Stock\Contracts;


/**
 * Repository to get and set contact information for the webshop
 */
interface StockReservationRepositoryContract 
{

	/**
	 * Reserves stock for all items in the cart.
	 */
	public function reserveBasket(
	);

	/**
	 * Unreserve all stock reservations for the basket of the current customer session.
	 */
	public function unreserveBasket(
	);

}
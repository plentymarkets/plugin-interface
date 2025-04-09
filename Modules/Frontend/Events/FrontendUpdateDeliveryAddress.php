<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the delivery address is changed in the online store.
 */
abstract class FrontendUpdateDeliveryAddress 
{

	/**
	 * Gets the ID of the address saved for the account.
	 */
	abstract public function getAccountAddressId(
	):int;

	/**
	 * Shows if the basket calculation should be skipped
	 */
	abstract public function isSkipBasketCalculation(
	):bool;

}
<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when a customer address is changed in the online store.
 */
abstract class FrontendCustomerAddressChanged 
{

	/**
	 * Shows if the basket calculation should be skipped
	 */
	abstract public function isSkipBasketCalculation(
	):bool;

}
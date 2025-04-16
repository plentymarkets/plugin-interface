<?php
namespace Plenty\Modules\Frontend\Events;


/**
 * The event is triggered when the shipping country is changed in the online store.
 */
abstract class FrontendShippingCountryChanged 
{

	/**
	 * Gets the ID of the shipping country.
	 */
	abstract public function getShippingCountryId(
	):int;

	/**
	 * Updates the ID of the shipping country. The ID must be specified.
	 */
	abstract public function setShippingCountryId(
		int $shippingCountryId
	):FrontendShippingCountryChanged;

	/**
	 * Shows if the basket calculation should be skipped
	 */
	abstract public function isSkipBasketCalculation(
	):bool;

}
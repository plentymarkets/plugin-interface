<?php
namespace Plenty\Modules\Frontend\Contracts;

use Plenty\Modules\Frontend\Events\ValidateCheckoutEvent;

/**
 * The CheckoutContract is the interface for the checkout repository. This interface allows to set the shipping country ID, the payment method ID, the shipping profile ID and the currency in the checkout.
 */
interface Checkout 
{

	/**
	 * Gets the shipping country ID.
	 */
	public function getShippingCountryId(
	):?int;

	/**
	 * Updates the ID of the shipping country. The ID must be specified.
	 */
	public function setShippingCountryId(
		int $shippingCountryId
	);

	/**
	 * Gets the payment method id of the current shopping cart.
	 */
	public function getPaymentMethodId(
	):int;

	/**
	 * Updates the ID of the payment method. The ID must be specified.
	 */
	public function setPaymentMethodId(
		int $paymentMethodId
	);

	/**
	 * Gets the shipping profile id of the current shopping cart.
	 */
	public function getShippingProfileId(
	):int;

	/**
	 * Updates the ID of the shipping profile. The ID must be specified.
	 */
	public function setShippingProfileId(
		int $shippingProfileId, 
		bool $force = false
	);

	/**
	 * Get the currency of the current shopping cart.
	 */
	public function getCurrency(
	):string;

	/**
	 * Updates the currency. The currency must be specified.
	 */
	public function setCurrency(
		string $currency
	);

	/**
	 * Get the referrer ID from the current shopping cart.
	 */
	public function getBasketReferrerId(
	):float;

	/**
	 * Updates the ID of the order referrer. The ID must be specified.
	 */
	public function setBasketReferrerId(
		int $referrerId
	);

	/**
	 * Gets the invoice address id of the current shopping cart.
	 */
	public function getCustomerInvoiceAddressId(
	):int;

	/**
	 * Sets the invoice address id for the current shopping cart.
	 */
	public function setCustomerInvoiceAddressId(
		int $invoiceAddressId
	);

	/**
	 * Gets the shipping address id of the current shopping cart.
	 */
	public function getCustomerShippingAddressId(
	):int;

	/**
	 * Sets the shipping address id for the current shopping cart.
	 */
	public function setCustomerShippingAddressId(
		int $shippingAddressId
	);

	/**
	 * Validate all data of the checkout
	 */
	public function validateCheckout(
	):ValidateCheckoutEvent;

}

<?php
namespace Plenty\Modules\Frontend\PaymentMethod\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Payment\Method\Models\PaymentMethod;

/**
 * The FrontendPaymentMethodRepositoryContract is the interface for the front end payment method repository. Get the payment method information to be displayed in the online store.
 */
interface FrontendPaymentMethodRepositoryContract 
{

	/**
	 * Lists all payment methods of the current customer session.
	 */
	public function getCurrentPaymentMethodsList(
	):array;

	/**
	 * Lists all payment methods for switch.
	 */
	public function getCurrentPaymentMethodsListForSwitch(
		int $currentPaymentMethodId = 0, 
		int $orderId = null, 
		string $lang = "de"
	):array;

	/**
	 * Lists all payment methods if express checkout is available
	 */
	public function getCurrentPaymentMethodsForExpressCheckout(
	):array;

	/**
	 * Gets the name of the payment method in the specified language.
	 */
	public function getPaymentMethodName(
		PaymentMethod $paymentMethod, 
		string $lang
	):string;

	/**
	 * Gets additional costs for the payment method. Additional costs can be entered in the config.json.
	 */
	public function getPaymentMethodFee(
		PaymentMethod $paymentMethod
	):float;

	/**
	 * Gets the icon of the payment method. The path of the icon can be entered in the config.json.
	 */
	public function getPaymentMethodIcon(
		PaymentMethod $paymentMethod, 
		string $lang
	):string;

	/**
	 * Gets the description of the payment method. The description can be entered in the config.json.
	 */
	public function getPaymentMethodDescription(
		PaymentMethod $paymentMethod, 
		string $lang
	):string;

	/**
	 * Gets the detail link of the payment method. The detail link can be entered in the config.json.
	 */
	public function getPaymentMethodSourceUrl(
		PaymentMethod $paymentMethod
	):string;

	/**
	 * Gets the detail link of the payment method. The detail link can be entered in the config.json.
	 */
	public function getIsSwitchableTo(
		PaymentMethod $paymentMethod, 
		int $orderId = null
	):bool;

	/**
	 * Gets the detail link of the payment method. The detail link can be entered in the config.json.
	 */
	public function getIsSwitchableFrom(
		PaymentMethod $paymentMethod, 
		int $orderId = null
	):bool;

	/**
	 * Get true if the payment method can be selected in the payment method list
	 */
	public function getPaymentMethodIsSelectable(
		PaymentMethod $paymentMethod
	):bool;

	/**
	 * Gets the name of the payment method by ID and language. The ID of the payment method and the language must be specified.
	 */
	public function getPaymentMethodNameById(
		int $paymentMethodId, 
		string $lang
	):string;

	/**
	 * Gets additional costs for the payment method by ID. The ID of the payment method must be specified.
	 */
	public function getPaymentMethodFeeById(
		int $paymentMethodId
	):float;

	/**
	 * Gets the icon of the payment method by ID and language. The ID of the payment method and the language must be specified.
	 */
	public function getPaymentMethodIconById(
		int $paymentMethodId, 
		string $lang
	):string;

	/**
	 * Gets the description of the payment method by ID and language. The ID of the payment method and the language must be specified.
	 */
	public function getPaymentMethodDescriptionById(
		int $paymentMethodId, 
		string $lang
	):string;

	/**
	 * Get all payment methods to which switching is allowed for the current payment method.
	 */
	public function getPaymentMethodSwitchToById(
		int $paymentMethodId, 
		int $orderId = null
	):bool;

	/**
	 * Get all payment methods from which switching is allowed for the current payment method.
	 */
	public function getPaymentMethodSwitchFromById(
		int $paymentMethodId, 
		int $orderId = null
	):bool;

	/**
	 * Get information if switching to the payment method is allowed.
	 */
	public function getPaymentMethodSwitchableToById(
		int $paymentMethodId, 
		int $orderId = null
	):bool;

	/**
	 * Get information if switching from the payment method is allowed.
	 */
	public function getPaymentMethodSwitchableFromById(
		int $paymentMethodId, 
		int $orderId = null
	):bool;

	/**
	 * Get all allowed payment methods for the current contact.
	 */
	public function getAllowedPaymentMethodListForContact(
	);

	public function getCurrentPaymentMethodById(
		int $paymentMethodId
	);

}
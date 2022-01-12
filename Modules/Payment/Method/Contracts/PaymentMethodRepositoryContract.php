<?php
namespace Plenty\Modules\Payment\Method\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Payment\Method\Models\PaymentMethod;

/**
 * The PaymentMethodRepositoryContract is the interface for the payment method repository. List, get, create and update payment methods.
 */
interface PaymentMethodRepositoryContract 
{

	/**
	 * Lists payment methods.
	 */
	public function all(
	):array;

	/**
	 * Lists payment methods for a plugin key. The plugin key must be specified.
	 */
	public function allForPlugin(
		string $pluginKey
	):array;

	/**
	 * Get all plugin payment methods.
	 */
	public function allPluginPaymentMethods(
	):array;

	/**
	 * Get all old payment methods.
	 */
	public function allOldPaymentMethods(
	):array;

	/**
	 * Gets a payment method. The ID of the payment method must be specified.
	 */
	public function findByPaymentMethodId(
		int $paymentMethodId
	):PaymentMethod;

	/**
	 * Gets a payment method. The plugin and the payment key must be specified.
	 */
	public function findByPluginAndPaymentKey(
		string $pluginKey, 
		string $paymentKey
	):PaymentMethod;

	/**
	 * Get an array with all payment methods with the ID as key and the name as value.
	 */
	public function getPreviewList(
		string $language = null
	):array;

	/**
	 * Creates a payment method.
	 */
	public function createPaymentMethod(
		 $paymentMethodData
	):PaymentMethod;

	/**
	 * Updates the payment method name.
	 */
	public function updateName(
		 $paymentMethodData
	):PaymentMethod;

	/**
	 * Prepares a payment method. The ID of the payment method must be specified.
	 */
	public function preparePaymentMethod(
		int $mop
	):array;

	/**
	 * Executes a payment. The ID of the payment method and the ID of the order must be specified.
	 */
	public function executePayment(
		int $mop, 
		int $orderId
	):array;

	/**
	 * List all payment methods which are searchable for the backend
	 */
	public function listBackendSearchable(
		string $lang
	):array;

	/**
	 * List all payment methods which are active for the backend
	 */
	public function listBackendActive(
		string $lang
	):array;

	/**
	 * List all payment methods backend icon
	 */
	public function listBackendIcon(
	):array;

	/**
	 * List all payment methods which can handle subscriptions
	 */
	public function listCanHandleSubscriptions(
		string $lang
	):array;

	/**
	 * List all payment methods which are active
	 */
	public function listAllActive(
		string $lang
	):array;

	public function backendSearchablePaymentMethods(
	):array;

	public function backendActivePaymentMethods(
	):array;

}
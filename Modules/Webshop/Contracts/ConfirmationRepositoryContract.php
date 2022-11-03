<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Repository to validate a order confirmation
 */
interface ConfirmationRepositoryContract 
{

	const STATUS_ORDER_CONFIRMATION_VALID = 'valid';

	const STATUS_ORDER_CONFIRMATION_SOFTLOGIN = 'softLogin';

	const STATUS_ORDER_CONFIRMATION_REGENERATE = 'regenerate';

	const STATUS_ORDER_CONFIRMATION_INVALID = 'invalid';

	/**
	 * Check validity for a given order
	 */
	public function checkValidity(
		Order $order
	):bool;

	/**
	 * Check the access status for a given order
	 */
	public function checkOrderAccessStatus(
		Order $order
	):string;

}
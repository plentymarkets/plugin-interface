<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * Repository to validate a order confirmation
 */
interface ConfirmationRepositoryContract 
{

	/**
	 * Check validity for a given order
	 */
	public function checkValidity(
		Order $order
	):bool;

}
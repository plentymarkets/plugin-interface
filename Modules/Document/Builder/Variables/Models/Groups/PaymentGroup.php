<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Groups;


/**
 * The Order Payment variables group
 */
abstract class PaymentGroup 
{

	const IDENTIFIER = 'Payment';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
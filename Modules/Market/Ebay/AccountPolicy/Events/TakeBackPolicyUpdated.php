<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\TakeBackPolicy;

/**
 * An event class fired after a take back policy is updated.
 */
abstract class TakeBackPolicyUpdated extends \Plenty\Modules\Market\Ebay\AccountPolicy\Events\TakeBackPolicyEvent 

{

	public function __construct(
		TakeBackPolicy $takeBackPolicy
	)
	{
		return null;
	}

	/**
	 * Get the TakeBackPolicy instance.
	 */
	public function getTakeBackPolicy(
	):TakeBackPolicy
	{
		return null;
	}

}
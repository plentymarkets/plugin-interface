<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\TakeBackPolicy;

/**
 * A base event class for all take back policy events. Each take back policy event expects a TakeBackPolicy model.
 */
abstract class TakeBackPolicyEvent 
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
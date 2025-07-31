<?php
namespace Plenty\Modules\Webshop\Hooks;

use Exception;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Webshop\Contracts\VatNumberRepositoryContract;
use Plenty\Modules\Webshop\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\Webshop\Events\ValidateVatNumber;
use Plenty\Modules\Webshop\Exceptions\VatNumberException;

/**
 * Hook to execute validation of vat numbers.
 * Can be triggered by emitting ValidateVatNumber while creating new addresses.
 */
abstract class CheckVatNumber 
{

	/**
	 * Validate the given vat number
	 */
	abstract public function handle(
		ValidateVatNumber $vatNumberEvent
	);

}
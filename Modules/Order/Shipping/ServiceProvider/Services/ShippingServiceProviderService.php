<?php
namespace Plenty\Modules\Order\Shipping\ServiceProvider\Services;

use Plenty\Modules\DhlShipping\Services\MigrationService;
use Plenty\Modules\Order\Shipping\ServiceProvider\Exceptions\ShippingProviderRegisterException;
use Plenty\Modules\Order\Shipping\ServiceProvider\Services\Entries\ShippingServiceProviderEntry;

/**
 * The ShippingServiceProviderService class offers the possibility to register a shipping provider class and method that can be called by plentymarkets shipping controllers.
 */
abstract class ShippingServiceProviderService 
{

	/**
	 * Registers a new shipping provider
	 */
	abstract public function registerShippingProvider(
		string $shippingServiceProviderCode, 
		 $shippingServiceProviderNames, 
		 $shippingServiceProviderClasses
	):bool;

	/**
	 * Check if shipping service provider has specified method
	 */
	abstract public function hasShippingServiceProviderMethod(
		string $shippingServiceProviderCode, 
		string $methodName
	):bool;

}
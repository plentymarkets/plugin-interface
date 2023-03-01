<?php
namespace Plenty\Modules\Fulfillment\Services;

use Plenty\Legacy\Repositories\Fulfillment\Shipping\LegacyFulfillmentShippingRepository;
use Plenty\Modules\Authorization\Services\AuthHelper;
use Plenty\Modules\Comment\Contracts\CommentRepositoryContract;
use Plenty\Modules\Fulfillment\Helpers\IntegrationMappingHelper;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;

/**
 * The FulfillmentShipmentService is the service for registering and cancelling shipments of an order.
 */
abstract class FulfillmentShipmentService 
{

	/**
	 * Reset the shipment of the order
	 */
	abstract public function resetShipment(
		int $orderId
	):bool;

	/**
	 * Cancel the shipment of an order.
	 */
	abstract public function cancelShipment(
		int $orderId
	):bool;

	/**
	 * Register the shipment of an order.
	 */
	abstract public function registerShipment(
		int $orderId, 
		string $shippingProviderCode = ""
	):bool;

	/**
	 * List all the active shipping service providers
	 */
	abstract public function getShippingServiceProviders(
		bool $includePlugins = true
	):array;

}
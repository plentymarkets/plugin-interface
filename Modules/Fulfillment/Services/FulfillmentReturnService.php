<?php
namespace Plenty\Modules\Fulfillment\Services;

use Plenty\Legacy\Repositories\Fulfillment\Shipping\LegacyFulfillmentShippingRepository;
use Plenty\Modules\Authorization\Services\AuthHelper;
use Plenty\Modules\Comment\Contracts\CommentRepositoryContract;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Shipping\Contracts\ParcelServicePresetRepositoryContract;
use Plenty\Modules\Order\Shipping\ServiceProvider\Contracts\ShippingServiceProviderRepositoryContract;
use Plenty\Modules\Plugin\Contracts\PluginRepositoryContract;
use Plenty\Modules\User\Contracts\UserRepositoryContract;

/**
 * The FulfillmentReturnService is the service for return shipments of an order.
 */
abstract class FulfillmentReturnService 
{

	/**
	 * Register the return of an order.
	 */
	abstract public function registerReturns(
		int $orderId
	):bool;

	/**
	 * Register the return of an order
	 */
	abstract public function registerReturn(
		int $orderId, 
		string $returnProvider
	):bool;

}
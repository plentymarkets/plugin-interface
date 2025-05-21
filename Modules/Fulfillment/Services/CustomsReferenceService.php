<?php
namespace Plenty\Modules\Fulfillment\Services;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Fulfillment\Helpers\CustomsReferenceHelper;
use Plenty\Modules\Fulfillment\Models\CustomsReference;
use Plenty\Modules\Order\Contracts\InternalOrderRepositoryContract;

/**
 * The CustomsReferenceService is the service for determining customs number of an order.
 */
abstract class CustomsReferenceService 
{

	/**
	 * Get available customs references for an order
	 */
	abstract public function getCustomsReferenceForOrder(
		int $orderId
	):array;

}
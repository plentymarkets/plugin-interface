<?php
namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Modules\Core\Data\Exceptions\ModelFlattenerException;
use Plenty\Modules\Core\Data\Factories\LazyLoaderFactory;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Order\Models\OrderItem;
use Plenty\Modules\Order\Models\OrderItemType;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;
use Plenty\Modules\Property\V2\Models\Property;
use Plenty\Modules\Webshop\Contracts\LocalizationRepositoryContract;
use Plenty\Modules\Webshop\Order\Traits\ValidateOrderAccessKey;

/**
 * Service for mapping between variation order properties and old properties
 */
abstract class VariationPropertyConverter 
{

	abstract public function convertOrderProperties(
		array $document
	):array;

	abstract public function convertVariationPropertyOrderItems(
		Order $order
	);

}
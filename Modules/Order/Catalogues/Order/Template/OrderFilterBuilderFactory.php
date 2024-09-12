<?php
namespace Plenty\Modules\Order\Catalogues\Order\Template;

use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderClientFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderCompletedAtFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderCreatedAtFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderExcludeMainOrdersFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderIdFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderItemTypeFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderItemVariationIdFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderOwnerFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderPaidAtFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderPaymentMethodFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderReceivedDateFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderReferrerFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderShippingProfileFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderStatusFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderTypeFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderUpdatedAtFilterBuilder;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\OrderWarehouseFilterBuilder;

/**
 * This factory provides methods to retrieve all available catalog order filter builders.
 */
abstract class OrderFilterBuilderFactory 
{

	abstract public function orderWarehouseFilterBuilder(
	):OrderWarehouseFilterBuilder;

	abstract public function orderStatusFilterBuilder(
	):OrderStatusFilterBuilder;

	abstract public function orderTypeFilterBuilder(
	):OrderTypeFilterBuilder;

	abstract public function orderReferrerFilterBuilder(
	):OrderReferrerFilterBuilder;

	abstract public function orderPaymentMethodFilterBuilder(
	):OrderPaymentMethodFilterBuilder;

	abstract public function orderOwnerFilterBuilder(
	):OrderOwnerFilterBuilder;

	abstract public function orderItemVariationIdFilterBuilder(
	):OrderOwnerFilterBuilder;

	abstract public function orderClientFilterBuilder(
	):OrderClientFilterBuilder;

	abstract public function orderItemTypeFilterBuilder(
	):OrderItemTypeFilterBuilder;

	abstract public function orderIdFilterBuilder(
	):OrderIdFilterBuilder;

	abstract public function orderCreatedAtFilterBuilder(
	):OrderCreatedAtFilterBuilder;

	abstract public function orderUpdatedAtFilterBuilder(
	):OrderUpdatedAtFilterBuilder;

	abstract public function orderPaidAtFilterBuilder(
	):OrderPaidAtFilterBuilder;

	abstract public function orderCompletedAtFilterBuilder(
	):OrderCompletedAtFilterBuilder;

	abstract public function orderReceivedDateFilterBuilder(
	):OrderReceivedDateFilterBuilder;

	abstract public function orderShippingProfileFilterBuilder(
	):OrderShippingProfileFilterBuilder;

	abstract public function orderExcludeMainOrdersFilterBuilder(
	):OrderShippingProfileFilterBuilder;

}
<?php
namespace Plenty\Modules\Document\Builder\Variables\Enums;


/**
 * An enum type with all objects available for variables.
 */
abstract class VariablesObjectTypeEnum 
{

	const ORDER = 'Order';

	const ORDER_ITEM = 'OrderItem';

	const ORDER_ITEM_TYPES = 'OrderItemTypes';

	const ORDER_AMOUNT = 'OrderAmount';

	const ORDER_ITEM_AMOUNT = 'OrderItemAmount';

	const VARIATION = 'Variation';

	const ORDER_VARIATIONS_AMOUNTS = 'OrderVariationsAmounts';

	const ORDER_COUPONS_AMOUNTS = 'OrderCouponsAmounts';

	const ORDER_DISCOUNT_AMOUNTS = 'OrderDiscountAmounts';

	const ORDER_ITEM_REORDER_REFERENCE = 'OrderItemReorderReference';

	const REFERENCED_ORDER = 'ReferencedOrder';

	const ORDER_PAYMENT_TERMS = 'OrderPaymentTerms';

	const CONTACT = 'Contact';

	const ADDRESS = 'Address';

	const LOCATION = 'Location';

	const DOCUMENT = 'Document';

	const PARENT_DOCUMENT = 'ParentDocument';

	const REFERENCE_DOCUMENT = 'ReferenceDocument';

	const INVOICE = 'Invoice';

	const DELIVERY_NOTE = 'DeliveryNote';

	const ORDER_CONFIRMATION = 'OrderConfirmation';

	const META_DATA = 'MetaData';

	const PLUGIN_OLD = 'PluginOld';

	const SHIPPING_PROFILE = 'ShippingProfile';

	const SHIPPING_PROVIDER = 'ShippingProvider';

	const TAX_DETERMINER = 'TaxDeterminer';

	const COUNTRY_VAT = 'CountryVat';

	const WAREHOUSE = 'Warehouse';

	const QUANTITY_ARRAY = 'QuantityArray';

	const OTHER = 'Other';

	const MESSENGER_CONVERSATION = 'MessengerConversation';

	const STOCK_INTAKE_DATA = 'StockIntakeData';

	const RECEIPT_ITEM = 'ReceiptItem';

	const VALUE_FORMATTER = 'ValueFormatter';

	const UNKNOWN = 'Unknown';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
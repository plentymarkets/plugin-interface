<?php
namespace Plenty\Modules\Document\Builder\Variables\Enums;


/**
 * An enum type with all objects available for variables.
 */
abstract class VariablesObjectTypeEnum 
{

	const Order = 'Order';

	const OrderItem = 'OrderItem';

	const OrderItemTypes = 'OrderItemTypes';

	const OrderAmount = 'OrderAmount';

	const OrderItemAmount = 'OrderItemAmount';

	const Variation = 'Variation';

	const OrderVariationsAmounts = 'OrderVariationsAmounts';

	const OrderCouponsAmounts = 'OrderCouponsAmounts';

	const OrderDiscountAmounts = 'OrderDiscountAmounts';

	const OrderItemReorderReference = 'OrderItemReorderReference';

	const ReferencedOrder = 'ReferencedOrder';

	const Contact = 'Contact';

	const Address = 'Address';

	const Location = 'Location';

	const Document = 'Document';

	const ParentDocument = 'ParentDocument';

	const ReferenceDocument = 'ReferenceDocument';

	const Invoice = 'Invoice';

	const DeliveryNote = 'DeliveryNote';

	const OrderConfirmation = 'OrderConfirmation';

	const MetaData = 'MetaData';

	const PluginOld = 'PluginOld';

	const ShippingProfile = 'ShippingProfile';

	const ShippingProvider = 'ShippingProvider';

	const TaxDeterminer = 'TaxDeterminer';

	const CountryVat = 'CountryVat';

	const Warehouse = 'Warehouse';

	const QuantityArray = 'QuantityArray';

	const Other = 'Other';

	const MessengerConversation = 'MessengerConversation';

	const Unknown = 'Unknown';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
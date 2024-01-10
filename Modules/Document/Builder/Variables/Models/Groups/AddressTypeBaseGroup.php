<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Groups;


/**
 * The order address type variable group
 */
abstract class AddressTypeBaseGroup 
{

	const InvoiceAddress = 'InvoiceAddress';

	const DeliveryAddress = 'DeliveryAddress';

	const SupplierAddress = 'SupplierAddress';

	const InboundWarehouseAddress = 'InboundWarehouseAddress';

	const OutboundWarehouseAddress = 'OutboundWarehouseAddress';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Groups;


/**
 * The order address type variable group
 */
abstract class AddressTypeBaseGroup 
{

	const INVOICE_ADDRESS = 'InvoiceAddress';

	const DELIVERY_ADDRESS = 'DeliveryAddress';

	const SUPPLIER_ADDRESS = 'SupplierAddress';

	const INBOUND_WAREHOUSE_ADDRESS = 'InboundWarehouseAddress';

	const OUTBOUND_WAREHOUSE_ADDRESS = 'OutboundWarehouseAddress';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
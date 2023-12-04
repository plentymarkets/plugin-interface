<?php
namespace Plenty\Modules\Document\Enums;


/**
 * A list of document type groups
 */
abstract class DocumentGroupTypeEnum 
{

	const Order = 'Order';

	const PurchaseOrder = 'PurchaseOrder';

	const Voucher = 'Voucher';

	const External = 'External';

	const OrderGlobal = 'OrderGlobal';

	const StockIntake = 'StockIntake';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
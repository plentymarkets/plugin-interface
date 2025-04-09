<?php
namespace Plenty\Modules\Document\Enums;


/**
 * A list of document type groups
 */
abstract class DocumentGroupTypeEnum 
{

	const ORDER = 'Order';

	const PURCHASE_ORDER = 'PurchaseOrder';

	const VOUCHER = 'Voucher';

	const EXTERNAL = 'External';

	const ORDER_GLOBAL = 'OrderGlobal';

	const STOCK_INTAKE = 'StockIntake';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Stock\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Stock\Models\StockReceiptMain;

/**
 * This interface allows you to get stock receipt mains.
 */
interface InternalStockReceiptMainContract 
{

	/**
	 * Gets a stock receipt main. The receipt ID must be specified.
	 */
	public function get(
		int $id, 
		array $with = []
	):StockReceiptMain;

}
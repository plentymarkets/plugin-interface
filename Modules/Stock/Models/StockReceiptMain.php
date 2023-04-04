<?php
namespace Plenty\Modules\Stock\Models;


/**
 * The stock receipt main model.
 */
abstract class StockReceiptMain 
{

	const UPDATED_AT = '';

	const CREATED_AT = 'createdAt';
	
public		$receiptId;
	
public		$dealerId;
	
public		$orderNo;
	
public		$arrival;
	
public		$currency;
	
public		$exchangeRatio;
	
public		$createdAt;
	
public		$receipts;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
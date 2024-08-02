<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order transaction sums model.
 */
abstract class OrderTransactionSums 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$orderId;
	
public		$quantityAllItems;
	
public		$quantityTransactionsInRegular;
	
public		$quantityTransactionsOutRegular;
	
public		$quantityTransactionsInCancelled;
	
public		$quantityTransactionsOutCancelled;
	
public		$quantityTransactionsInBooked;
	
public		$quantityTransactionsOutBooked;
	
public		$priceTotalTransactionsInRegular;
	
public		$priceTotalTransactionsOutRegular;
	
public		$priceTotalTransactionsInCancelled;
	
public		$priceTotalTransactionsOutCancelled;
	
public		$areTransactionsInComplete;
	
public		$areTransactionsOutComplete;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
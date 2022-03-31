<?php
namespace Plenty\Modules\Order\Date\Models;


/**
 * The OrderDateType model.
 */
abstract class OrderDateType 
{

	const ORDER_DELETED_DATE = 1;

	const ORDER_ENTRY_AT = 2;

	const ORDER_PAID_ON = 3;

	const ORDER_LAST_UPDATE = 4;

	const ORDER_COMPLETED_ON = 5;

	const ORDER_RETURN_DATE = 6;

	const ORDER_PAYMENT_DUE_DATE = 7;

	const ORDER_ESTIMATED_SHIPPING_DATE = 8;

	const ORDER_START_DATE = 9;

	const ORDER_END_DATE = 10;

	const ORDER_POSSIBLE_DELIVERY = 11;

	const ORDER_MARKET_TRANSFER_DATE = 12;

	const SUBSCRIPTION_CANCELLED_ON = 13;

	const SUBSCRIPTION_LAST_RUN = 14;

	const SUBSCRIPTION_NEXT_RUN = 15;

	const ORDER_PURCHASE_DATE = 16;

	const ORDER_FINISH_DATE = 17;

	const LATEST_SHIPPING_DATE = 18;

	const CONFIRMATION_LINK_VALID_UNTIL = 19;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$isErasable;
	
public		$position;
	
public		$names;
	
public		$orderDates;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
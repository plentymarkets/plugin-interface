<?php
namespace Plenty\Modules\Order\Transaction\Models;


/**
 * The order item transaction model.
 */
abstract class OrderItemTransaction 
{

	const DIRECTION_IN = 'in';

	const DIRECTION_OUT = 'out';

	const STATUS_REGULAR = 'regular';

	const STATUS_CANCELLED = 'cancelled';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$orderItemId;
	
public		$quantity;
	
public		$userId;
	
public		$identification;
	
public		$direction;
	
public		$status;
	
public		$receiptId;
	
public		$warehouseLocationId;
	
public		$batch;
	
public		$bestBeforeDate;
	
public		$deliveryNoteNumber;
	
public		$batchBestBeforeDateId;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$orderItem;
	
public		$warehouseLocation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
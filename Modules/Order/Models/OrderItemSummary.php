<?php
namespace Plenty\Modules\Order\Models;


/**
 * The order item summary model.
 */
abstract class OrderItemSummary 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$orderId;
	
public		$quantity;
	
public		$weight;
	
public		$warehouses;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
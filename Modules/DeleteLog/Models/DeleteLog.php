<?php
namespace Plenty\Modules\DeleteLog\Models;


/**
 * The delete log model
 */
abstract class DeleteLog 
{

	const REFERENCE_TYPE_CATEGORY = 1;

	const REFERENCE_TYPE_PAYMENTDATA = 2;

	const REFERENCE_TYPE_ORDERDATA = 3;

	const REFERENCE_TYPE_CUSTOMER = 4;

	const REFERENCE_TYPE_ITEM = 5;

	const REFERENCE_TYPE_FACET_ATTRIBUTE = 6;

	const REFERENCE_TYPE_FACET_CHARACTER = 7;

	const REFERENCE_TYPE_FACET_PRODUCER = 8;

	const REFERENCE_TYPE_FACET_AVAILIBILITY = 9;

	const REFERENCE_TYPE_UNIT = 10;

	const REFERENCE_TYPE_RETAIL_PRICE = 11;

	const REFERENCE_TYPE_RETAIL_PRICE_LINK = 12;

	const REFERENCE_TYPE_ITEM_VARIATION = 13;

	const REFERENCE_TYPE_ORDER_ITEM = 14;

	const UPDATED_AT = 'updatedAt';

	const CREATED_AT = 'createdAt';
	
public		$referenceType;
	
public		$referenceValue;
	
public		$userRealName;
	
public		$updatedAt;
	
public		$userId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
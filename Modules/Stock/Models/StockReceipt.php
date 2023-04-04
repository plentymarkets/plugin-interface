<?php
namespace Plenty\Modules\Stock\Models;


/**
 * The stock receipt model.
 */
abstract class StockReceipt 
{

	const UPDATED_AT = 'updatedAt';

	const CREATED_AT = '';
	
public		$id;
	
public		$receiptId;
	
public		$itemId;
	
public		$articleNo;
	
public		$name;
	
public		$num;
	
public		$inStock;
	
public		$price;
	
public		$priceId;
	
public		$attributeValueSetId;
	
public		$warehouseId;
	
public		$attributeSelection;
	
public		$position;
	
public		$externalItemId;
	
public		$updatedAt;
	
public		$storageLocationId;
	
public		$variationId;
	
public		$batchBestBeforeDateId;
	
public		$receiptMain;
	
public		$variation;
	
public		$batchBestBeforeDate;
	
public		$warehouse;
	
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
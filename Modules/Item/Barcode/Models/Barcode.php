<?php
namespace Plenty\Modules\Item\Barcode\Models;


/**
 * The barcode model including barcode referrer
 */
abstract class Barcode 
{

	const GTIN_TYPE = ['GTIN_8','GTIN_13','GTIN_14','GTIN_128'];

	const GTIN_8 = ['GTIN_8'];

	const GTIN_13 = ['GTIN_13'];

	const GTIN_14 = ['GTIN_14'];

	const GTIN_128 = ['GTIN_128'];

	const ISBN_TYPE = 'ISBN';

	const ISBN = ['ISBN'];

	const UPC = ['UPC'];

	const QR = ['QR'];

	const UPDATED_AT = 'plenty_item_barcode_last_update_timestamp';

	const CREATED_AT = 'plenty_item_barcode_created_timestamp';

	const BARCODE_TYPE = ['GTIN_8','GTIN_13','GTIN_14','GTIN_128','UPC','ISBN','QR','CODE_128'];

	const ITEMS_PER_PAGE = 50;
	
public		$id;
	
public		$name;
	
public		$type;
	
public		$createdAt;
	
public		$referrers;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
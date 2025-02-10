<?php
namespace Plenty\Modules\Webshop\Storefront\Models;


/**
 * The item wishlist model.
 */
abstract class ItemWishlist 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$variationId;
	
public		$contactId;
	
public		$plentyId;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
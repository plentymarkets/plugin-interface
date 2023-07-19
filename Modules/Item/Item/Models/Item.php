<?php
namespace Plenty\Modules\Item\Item\Models;


/**
 * The item model
 */
abstract class Item 
{

	const UPDATED_AT = 'timestamp';

	const CREATED_AT = 'inserted';

	const MAX_ITEMS_PER_PAGE = 100;
	
public		$id;
	
public		$position;
	
public		$itemType;
	
public		$stockType;
	
public		$storeSpecial;
	
public		$ownerId;
	
public		$manufacturerId;
	
public		$producingCountryId;
	
public		$mainVariationId;
	
public		$revenueAccount;
	
public		$couponRestriction;
	
public		$condition;
	
public		$conditionApi;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$isSubscribable;
	
public		$isSerialNumber;
	
public		$isShippingPackage;
	
public		$amazonFbaPlatform;
	
public		$isShippableByAmazon;
	
public		$amazonProductType;
	
public		$amazonFedas;
	
public		$ebayPresetId;
	
public		$ebayCategory;
	
public		$ebayCategory2;
	
public		$ebayStoreCategory;
	
public		$ebayStoreCategory2;
	
public		$rakutenCategoryId;
	
public		$flagOne;
	
public		$flagTwo;
	
public		$ageRestriction;
	
public		$feedback;
	
public		$free1;
	
public		$free2;
	
public		$free3;
	
public		$free4;
	
public		$free5;
	
public		$free6;
	
public		$free7;
	
public		$free8;
	
public		$free9;
	
public		$free10;
	
public		$free11;
	
public		$free12;
	
public		$free13;
	
public		$free14;
	
public		$free15;
	
public		$free16;
	
public		$free17;
	
public		$free18;
	
public		$free19;
	
public		$free20;
	
public		$maximumOrderQuantity;
	
public		$manufacturer;
	
public		$producingCountry;
	
public		$texts;
	
public		$ebayTitles;
	
public		$itemShippingProfiles;
	
public		$itemProperties;
	
public		$itemCrossSelling;
	
public		$variations;
	
public		$itemImages;
	
public		$customsTariffNumber;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
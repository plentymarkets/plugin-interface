<?php
namespace Plenty\Modules\Listing\Property\Models;


/**
 * The listing properties model. Each listing property has a type.
 */
abstract class ListingPropertyType 
{

	const SHIPPING_PROFILE_ID = 1;

	const ORDER_STATUS = 2;

	const LAYOUT_TEMPLATE_ID = 3;

	const MAX_NUM_OF_IMAGES = 4;

	const WAREHOUSE_ID = 5;

	const BASIC_PRICE_IN_TEXT = 6;

	const VAT_VALUE = 7;

	const VAT_COUNTRY_ID = 8;

	const MAIN_LANGUAGE = 9;

	const USE_ITEM_PRICE = 10;

	const NUMBER_PER_LOT = 11;

	const TRANSMIT_ITEM_NUMBER_TYPE = 12;

	const RELISTED_EXTERNAL_ID = 13;

	const SCO_OFFER = 14;

	const PROMOTION = 15;

	const UUID = 16;

	const UPDATE_ERROR = 17;

	const HAS_VARIATIONS = 18;

	const END_NOW = 19;

	const INSERT_BY_TYPE = 20;

	const PAYMENT_METHODS = 21;

	const FIRST_PLATFORM_CATEGORY_ID = 22;

	const SECOND_PLATFORM_CATEGORY_ID = 23;

	const FIRST_SHOP_CATEGORY_ID = 24;

	const SECOND_SHOP_CATEGORY_ID = 25;

	const THIRD_SHOP_CATEGORY_ID = 26;

	const ENHANCEMENTS = 27;

	const EBAY_PARTS_FITMENT_LIST_ID = 100;

	const EBAY_MAX_ONLINE_LISTINGS = 101;

	const EBAY_PRIVATE_AUCTION = 102;

	const EBAY_GALLERY_TYPE = 103;

	const EBAY_GALLERY_DURATION = 104;

	const EBAY_TRANSMIT_MPR = 105;

	const EBAY_COUNTER_TYPE = 106;

	const EBAY_CONDITION_ID = 107;

	const EBAY_CONDITION_DESCRIPTION = 108;

	const EBAY_BEST_OFFER = 109;

	const EBAY_BEST_OFFER_DECLINE_PRICE = 110;

	const EBAY_BEST_OFFER_ACCEPT_PRICE = 111;

	const EBAY_IS_EBAY_PLUS = 112;

	const EBAY_IS_CLICK_AND_COLLECT = 113;

	const EBAY_USE_EPS = 114;

	const EBAY_BEST_OFFER_TYPE = 115;

	const EBAY_REPAIR_SCORE = 116;

	const HOOD_SHOW_ON_SHOP_STARTPAGE = 200;

	const HOOD_SHIPPING_DISCOUNT = 201;

	const HOOD_DELIVERY_DAYS_ON_STOCK_FROM = 202;

	const HOOD_DELIVERY_DAYS_ON_STOCK_TO = 203;

	const HOOD_DELIVERY_DAYS_NOT_ON_STOCK_FROM = 204;

	const HOOD_DELIVERY_DAYS_NOT_ON_STOCK_TO = 205;

	const RICARDO_WARRANTY_ID = 300;

	const RICARDO_DELIVERY_ID = 301;

	const RICARDO_AVAILABILITY_ID = 302;

	const RICARDO_DELIVERY_COST = 303;

	const RICARDO_PAYMENT_ID = 304;

	const RICARDO_PRICE_INCREMENT = 305;

	const RICARDO_ITEM_CONDITION_ID = 306;

	const RICARDO_MAX_RELIST_COUNT = 307;

	const RICARDO_IS_CUMULATIVE_SHIPPING = 308;

	const RICARDO_DELIVERY_PACKAGE_SIZE_ID = 309;

	const RICARDO_USE_SECONDARY_LANGUAGE = 310;

	const RICARDO_TEMPLATE_ID = 311;

	const RICARDO_IS_RELIST_SOLD_OUT = 312;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$isErasable;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
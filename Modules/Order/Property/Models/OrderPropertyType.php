<?php
namespace Plenty\Modules\Order\Property\Models;


/**
 * The OrderPropertyType model. Each order property must have a property type. An order can have one property of each property type. The default property types provided by plentymarkets are listed here.
 */
abstract class OrderPropertyType 
{

	const WAREHOUSE = 1;

	const SHIPPING_PROFILE = 2;

	const PAYMENT_METHOD = 3;

	const PAYMENT_STATUS = 4;

	const EXTERNAL_SHIPPING_PROFILE = 5;

	const DOCUMENT_LANGUAGE = 6;

	const EXTERNAL_ORDER_ID = 7;

	const CUSTOMER_SIGN = 8;

	const DUNNING_LEVEL = 9;

	const SELLER_ACCOUNT = 10;

	const WEIGHT = 11;

	const WIDTH = 12;

	const LENGTH = 13;

	const HEIGHT = 14;

	const FLAG = 15;

	const EXTERNAL_TOKEN_ID = 16;

	const EXTERNAL_ITEM_ID = 17;

	const COUPON_CODE = 18;

	const COUPON_TYPE = 19;

	const ORIGINAL_WAREHOUSE = 20;

	const ORIGINAL_QUANTITY = 21;

	const CATEGORY_ID = 22;

	const MARKET_FEE = 23;

	const STOCK_REVERSING = 24;

	const DISPUTE_STATUS = 25;

	const NO_CHANGE_BY_CONTACT = 26;

	const INTERVAL_TYPE = 27;

	const INTERVAL_VALUE = 28;

	const SIZE = 29;

	const LOCATION_RESERVED = 30;

	const EXTERNAL_SHIPMENT_ITEM_ID = 31;

	const PARTIAL_SHIPPING_COSTS = 32;

	const MAIN_DOCUMENT_NUMBER = 33;

	const SALES_TAX_ID_NUMBER = 34;

	const RETURNS_REASON = 35;

	const RETURNS_ITEM_STATUS = 36;

	const FULFILLMENT_CENTER_ID = 37;

	const FULFILLMENT_CENTER_COUNTRY_ISO = 38;

	const REORDER_ITEM_ID = 39;

	const LISTING_TYPE = 40;

	const EXTERNAL_ORDER_ITEM_ID = 41;

	const RETURN_KEY_ID = 42;

	const COMMUNICATION_KEY_ID = 43;

	const AMAZON_VCS = 44;

	const PAYMENT_TRANSACTION_ID = 45;

	const SOLD_COUPON_CODE = 46;

	const EXTERNAL_TAX_SERVICE = 47;

	const ORDER_ITEM_STATE = 48;

	const EXTERNAL_DELIVERY_NUMBER = 49;

	const SAP_ORDER_NUMBER = 50;

	const SETTLEMENT_ID = 51;

	const DISCOUNT = 52;

	const REORDER_ITEM_PACKAGE_UNIT = 53;

	const REORDER_ITEM_MINIMUM_PURCHASE = 54;

	const REORDER_ITEM_DELIVERY_TIME_IN_DAYS = 55;

	const REORDER_ITEM_DISCOUNTABLE = 56;

	const RETURNS_REMAINING_PERCENTAGE = 57;

	const NEW_RETURNS_MY_ACCOUNT = 58;

	const MERCHANT_ID = 60;

	const REPORT_ID = 61;

	const EXTERNAL_SOURCE_ORDER_ID = 62;

	const PREFERRED_STORAGE_LOCATION_ID = 63;

	const AMAZON_SHIPPING_LABEL = 64;

	const IS_EXPRESS_DELIVERY = 65;

	const ORDER_ORIGIN = 66;

	const REPAIR_STATUS = 67;

	const ORDER_ORIGIN_INTERFACE = 68;

	const AMAZON_TAX_REPORT_ID = 69;

	const PROCUREMENT_COSTS_FREIGHT_CHARGE = 70;

	const PROCUREMENT_COSTS_PACKAGING_CHARGE = 71;

	const PROCUREMENT_COSTS_TRANSPORT_INSURANCE = 72;

	const PROCUREMENT_COSTS_DRAYAGE = 73;

	const PROCUREMENT_COSTS_POSTAGE = 74;

	const PROCUREMENT_COSTS_CUSTOMS_DUTIES = 75;

	const PROCUREMENT_COSTS_BROKERAGE_FEE = 76;

	const PROCUREMENT_COSTS_SMALL_QUANTITY_SURCHARGES = 77;

	const PROCUREMENT_COSTS_OTHER_CHARGES = 78;

	const AMAZON_TRANSACTION_ID = 79;

	const EXTERNAL_RETURN_ID = 80;

	const ORDER_PROPERTY_ID = 81;

	const ORDER_PROPERTY_VALUE = 82;

	const ORDER_PROPERTY_GROUP_ID = 83;

	const AUTO_FULFILLED_EBAY = 84;

	const REORDER_ITEM_NAME = 85;

	const FORCE_GROSS_NET = 86;

	const SUBSCRIPTION_PLENTY_ID = 87;

	const MARKET_TAX_ID = 88;

	const MARKET_EORI = 89;

	const IS_REVERSE_CHARGED = 90;

	const DISALLOW_INTERNAL_TAX_RELEVANT_DOCUMENTS = 91;

	const WEEE_PICK_UP = 92;

	const MC_OP_ORDER_STATUS_ID = 93;

	const PACKED = 94;

	const ITEM_CUSTOM_OPTIONS_FILE_URL = 95;

	const ITEM_CUSTOM_OPTIONS_PAGE_URL = 96;

	const EXTERNAL_REFUND_ID = 97;

	const TRADE_REPRESENTATIVE = 992;

	const EBAY_CANCELLATION = 993;

	const EBAY_PLUS = 994;

	const FULFILLMENT_SERVICE = 995;

	const CLICK_AND_COLLECT = 996;

	const AMAZON_TCS = 997;

	const EBAY_PAYMENT_ID = 998;

	const SHIPPING_PRIVACY_HINT_ACCEPTED = 999;

	const INTERVAL_TYP = 27;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$isErasable;
	
public		$position;
	
public		$cast;
	
public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
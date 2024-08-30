<?php
namespace Plenty\Modules\Frontend\Session\Storage\Models;


/**
 * The session storage model for order data.
 */
abstract class Order 
{
	
public		$deliveryAddressId;
	
public		$invoiceAddressId;
	
public		$parcelServiceId;
	
public		$parcelServicePresetId;
	
public		$methodOfPayment;
	
public		$isNet;
	
public		$shippingCosts;
	
public		$calculatedWarehouseLocationId;
	
public		$isClearVatCase;
	
public		$orderAmountVats;
	
public		$promotionalCouponItems;
	
public		$itemOrderParams;
	
public		$trustedShopBuyerProtection;
	
public		$trustedShopApplicationId;
	
public		$coupon;
	
public		$couponDisplay;
	
public		$couponCodeValidation;
	
public		$activePaymentMethodsList;
	
public		$referrerId;
	
public		$referrerPriceColumn;
	
public		$referrerItemId;
	
public		$schedulerId;
	
public		$schedulerIntervalId;
	
public		$schedulerOrderExecutionId;
	
public		$schedulerFirstDeliveryDate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
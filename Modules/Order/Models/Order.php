<?php
namespace Plenty\Modules\Order\Models;


/**
 * The model of the order.
 */
abstract class Order 
{

	const CREATED_AT = 'order_main_entry_timestamp';

	const UPDATED_AT = 'last_update';
	
public		$id;
	
public		$typeId;
	
public		$methodOfPaymentId;
	
public		$shippingProfileId;
	
public		$paymentStatus;
	
public		$statusId;
	
public		$statusName;
	
public		$ownerId;
	
public		$referrerId;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$plentyId;
	
public		$locationId;
	
public		$roundTotalsOnly;
	
public		$numberOfDecimals;
	
public		$lockStatus;
	
public		$isLocked;
	
public		$hasTaxRelevantDocuments;
	
public		$billingAddress;
	
public		$deliveryAddress;
	
public		$owner;
	
public		$hasDeliveryOrders;
	
public		$legacyOrderType;
	
public		$client;
	
public		$addresses;
	
public		$addressRelations;
	
public		$orderItems;
	
public		$sortedOrderItems;
	
public		$properties;
	
public		$relations;
	
public		$amounts;
	
public		$comments;
	
public		$location;
	
public		$payments;
	
public		$orderReferences;
	
public		$reverseOrderReferences;
	
public		$originOrderReferences;
	
public		$shippingPallets;
	
public		$shippingPackages;
	
public		$documents;
	
public		$returnLabels;
	
public		$dates;
	
public		$originOrder;
	
public		$parentOrder;
	
public		$originOrders;
	
public		$parentOrders;
	
public		$childOrders;
	
public		$systemAmount;
	
public		$amount;
	
public		$contactSenderId;
	
public		$contactSender;
	
public		$contactReceiverId;
	
public		$contactReceiver;
	
public		$warehouseSenderId;
	
public		$warehouseSender;
	
public		$warehouseReceiverId;
	
public		$warehouseReceiver;
	
public		$transactionSums;
	
public		$orderItemSummary;
	
public		$paymentTerms;
	
public		$shippingInformation;
	
public		$tags;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
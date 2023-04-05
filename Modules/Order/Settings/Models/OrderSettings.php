<?php
namespace Plenty\Modules\Order\Settings\Models;


/**
 * The model of the order settings.
 */
abstract class OrderSettings 
{

	const DEFAULT_VALUE = 'defaultValue';

	const VALUE_IS_NULLABLE = 'valueIsNullable';

	const DIVERGENT_DB_KEY = 'divergentDBKey';

	const LOAD_OPTION_FIELD_SEPARATELY = 'loadOptionFieldSeparately';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$warehouseAssignment;
	
public		$warehouseSelection;
	
public		$orderItemPrefixes;
	
public		$cancelStatusFrom;
	
public		$cancelStatusTo;
	
public		$reservationStatusFrom;
	
public		$reservationStatusTo;
	
public		$reservationOnlyPaidOrders;
	
public		$noStockStatus4;
	
public		$stockChangeStatusFrom;
	
public		$stockChangeStatusTo;
	
public		$defaultVariationIdForDunningFees;
	
public		$defaultReferrerId;
	
public		$showInactivePaymentMethods;
	
public		$downPayment;
	
public		$useNewOrderUi;
	
public		$oldUiDisplayAddress;
	
public		$oldUiDisplayPricesNet;
	
public		$oldUiChangeableBundleQuantity;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
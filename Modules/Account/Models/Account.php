<?php
namespace Plenty\Modules\Account\Models;


/**
 * the account model.
 */
abstract class Account 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$number;
	
public		$companyName;
	
public		$taxIdNumber;
	
public		$valuta;
	
public		$discountDays;
	
public		$discountPercent;
	
public		$timeForPaymentAllowedDays;
	
public		$salesRepresentativeContactId;
	
public		$userId;
	
public		$deliveryTime;
	
public		$dealerMinOrderValue;
	
public		$supplierCurrency;
	
public		$externalId;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$contacts;
	
public		$contactRelations;
	
public		$salesRepresentativeRegions;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
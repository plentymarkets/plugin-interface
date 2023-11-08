<?php
namespace Plenty\Modules\Accounting\Vat\Models;


/**
 * The VAT model contains the complete VAT configuration in plentymarkets. The VAT configuration is based on 4 VAT rates. A VAT configuration always belongs to an accounting location. The accounting location is in a specified country and is assigned to a client. One accounting location can have several VAT configurations, but only one is active at a time. Which one is active depends on the startedAt date. This also means that only one VAT number is active per accounting location.
 */
abstract class Vat 
{

	const ITEMS_PER_PAGE = 50;

	const MIN_VAT_FIELD = 0;

	const MAX_VAT_FIELD = 5;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$countryId;
	
public		$taxIdNumber;
	
public		$startedAt;
	
public		$invalidFrom;
	
public		$locationId;
	
public		$marginScheme;
	
public		$isRestrictedToDigitalItems;
	
public		$isStandard;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$isActive;
	
public		$location;
	
public		$country;
	
public		$vatRates;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
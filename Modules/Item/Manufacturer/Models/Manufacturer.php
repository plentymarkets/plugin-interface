<?php
namespace Plenty\Modules\Item\Manufacturer\Models;


/**
 * The item manufacturer model
 */
abstract class Manufacturer 
{

	const UPDATED_AT = 'plenty_producer_last_update_timestamp';

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';
	
public		$id;
	
public		$name;
	
public		$externalName;
	
public		$logo;
	
public		$url;
	
public		$street;
	
public		$houseNo;
	
public		$postcode;
	
public		$town;
	
public		$phoneNumber;
	
public		$faxNumber;
	
public		$email;
	
public		$countryId;
	
public		$pixmaniaBrandId;
	
public		$neckermannAtEpBrandId;
	
public		$laRedouteBrandId;
	
public		$position;
	
public		$comment;
	
public		$updatedAt;
	
public		$responsibleName;
	
public		$responsibleStreet;
	
public		$responsibleHouseNo;
	
public		$responsiblePostCode;
	
public		$responsibleTown;
	
public		$responsibleCountry;
	
public		$responsibleEmail;
	
public		$commissions;
	
public		$externals;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
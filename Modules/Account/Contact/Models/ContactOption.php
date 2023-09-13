<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * The contact options model.
 */
abstract class ContactOption 
{

	const TYPE_PHONE = 1;

	const TYPE_MAIL = 2;

	const TYPE_FAX = 3;

	const TYPE_WEBSITE = 4;

	const TYPE_MARKETPLACE = 5;

	const TYPE_IDENTIFICATION_NUMBER = 6;

	const TYPE_PAYMENT = 7;

	const TYPE_USERNAME = 8;

	const TYPE_GROUPID = 9;

	const TYPE_ACCESS = 10;

	const TYPE_ADDITIONAL = 11;

	const TYPE_SALUTATION = 12;

	const TYPE_CONVERTED_BY = 13;

	const SUBTYPE_WORK = 1;

	const SUBTYPE_MOBILE_PRIVATE = 2;

	const SUBTYPE_MOBILE_WORK = 3;

	const SUBTYPE_PRIVATE = 4;

	const SUBTYPE_PAYPAL = 5;

	const SUBTYPE_EBAY = 6;

	const SUBTYPE_AMAZON = 7;

	const SUBTYPE_KLARNA = 8;

	const SUBTYPE_DHL = 9;

	const SUBTYPE_FORUM = 10;

	const SUBTYPE_GUEST = 11;

	const SUBTYPE_CONTACT_PERSON = 12;

	const SUBTYPE_MARKETPLACE_PARTNER = 13;

	const SUBTYPE_DEFAULT_PAYMENT = 14;

	const SUBTYPE_USER = 15;

	const SUBTYPE_MOLLIE = 16;

	const SUBTYPE_FOLLOW_UP_DATE = 17;

	const SUBTYPE_SUPPORT_PIN = 501;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$contactId;
	
public		$typeId;
	
public		$subTypeId;
	
public		$value;
	
public		$priority;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$contact;
	
public		$type;
	
public		$subType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
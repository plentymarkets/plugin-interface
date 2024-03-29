<?php
namespace Plenty\Modules\Account\Contact\Models;


/**
 * The contact model.
 */
abstract class Contact 
{

	const UNQUALIFIED_LEAD_STATUS_TYPE = 'unqualified';

	const ON_HOLD_LEAD_STATUS_TYPE = 'onhold';

	const QUALIFIED_LEAD_STATUS_TYPE = 'qualified';

	const WORKING_LEAD_STATUS_TYPE = 'working';

	const BASIC_LEAD_LEAD_STATUS_TYPE = 'basiclead';

	const CONVERTED_LEAD_STATUS_TYPE = 'converted';

	const LOST_LEAD_STATUS_TYPE = 'lost';

	const MALE_GENDER_TYPE = 'male';

	const FEMALE_GENDER_TYPE = 'female';

	const DIVERSE_GENDER_TYPE = 'diverse';

	const CONTACT_GENDERS = ['male','female','diverse'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$externalId;
	
public		$number;
	
public		$typeId;
	
public		$firstName;
	
public		$lastName;
	
public		$fullName;
	
public		$email;
	
public		$secondaryEmail;
	
public		$gender;
	
public		$title;
	
public		$formOfAddress;
	
public		$newsletterAllowanceAt;
	
public		$classId;
	
public		$blocked;
	
public		$rating;
	
public		$bookAccount;
	
public		$lang;
	
public		$referrerId;
	
public		$plentyId;
	
public		$userId;
	
public		$birthdayAt;
	
public		$lastLoginAt;
	
public		$lastLoginAtTimestamp;
	
public		$lastOrderAt;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$privatePhone;
	
public		$privateFax;
	
public		$privateMobile;
	
public		$ebayName;
	
public		$paypalEmail;
	
public		$paypalPayerId;
	
public		$klarnaPersonalId;
	
public		$dhlPostIdent;
	
public		$forumUsername;
	
public		$forumGroupId;
	
public		$singleAccess;
	
public		$contactPerson;
	
public		$marketplacePartner;
	
public		$addresses;
	
public		$primaryBillingAddress;
	
public		$deliveryAddresses;
	
public		$accounts;
	
public		$orders;
	
public		$contactOrders;
	
public		$banks;
	
public		$reorders;
	
public		$orderSchedulers;
	
public		$options;
	
public		$salesRepresentativeRegions;
	
public		$allowedMethodsOfPayment;
	
public		$type;
	
public		$orderSummary;
	
public		$tagRelationships;
	
public		$valuta;
	
public		$discountDays;
	
public		$discountPercent;
	
public		$timeForPaymentAllowedDays;
	
public		$salesRepresentativeContactId;
	
public		$anonymizeAt;
	
public		$isLead;
	
public		$leadStatusKey;
	
public		$inLeadStatusSince;
	
public		$leadStatusUpdatedAt;
	
public		$leadStatusUpdateAt;
	
public		$position_id;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
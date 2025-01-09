<?php
namespace Plenty\Modules\Order\Shipping\ParcelService\Models;


/**
 * The Parcel Service Preset Model
 */
abstract class ParcelServicePreset 
{

	const ALL_REFERRER = -1;

	const ALL_MULTISHOPS = -1;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$parcelServiceId;
	
public		$backendName;
	
public		$flag;
	
public		$priority;
	
public		$category;
	
public		$useArticlePorto;
	
public		$isInsured;
	
public		$isExpress;
	
public		$isPostident;
	
public		$isDefaultEnabled;
	
public		$islandFee;
	
public		$isCod;
	
public		$supportedMultishop;
	
public		$supportedReferrer;
	
public		$subreferrerSupport;
	
public		$excludedPaymentMethods;
	
public		$excludedCustomerGroups;
	
public		$shippingGroup;
	
public		$dispatchIdentifier;
	
public		$auctionType;
	
public		$supportedLoyaltyPrograms;
	
public		$updatedAt;
	
public		$parcelServicePresetNames;
	
public		$parcelServiceNames;
	
public		$showDataPrivacyAgreementHint;
	
public		$transmitPrivacyRule;
	
public		$alternativeEmail;
	
public		$alternativePhone;
	
public		$isParcelBox;
	
public		$isPostOffice;
	
public		$isSelfPickup;
	
public		$parcelService;
	
public		$parcelServiceRegionConstraint;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
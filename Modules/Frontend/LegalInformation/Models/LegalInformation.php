<?php
namespace Plenty\Modules\Frontend\LegalInformation\Models;


/**
 * The legal information model.
 */
abstract class LegalInformation 
{

	const TYPE_TERMS_AND_CONDITIONS = 'TermsConditions';

	const TYPE_CANCELLATION_RIGHTS = 'CancellationRights';

	const TYPE_PRIVACY_POLICY = 'PrivacyPolicy';

	const TYPE_LEGAL_DISCLOSURE = 'LegalDisclosure';

	const TYPE_WITHDRAWAL_FORM = 'WithdrawalForm';

	const TYPE_DECLARATION_OF_ACCESSIBILITY = 'DeclarationOfAccessibility';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$plentyId;
	
public		$lang;
	
public		$type;
	
public		$plainText;
	
public		$htmlText;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
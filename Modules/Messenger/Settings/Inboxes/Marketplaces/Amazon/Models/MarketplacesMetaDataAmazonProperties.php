<?php
namespace Plenty\Modules\Messenger\Settings\Inboxes\Marketplaces\Amazon\Models;


/**
 * The Amazon properties model of the messenger.
 */
abstract class MarketplacesMetaDataAmazonProperties 
{

	const ALLOWED_AMAZON_MESSAGING_ACTIONS = ['confirmCustomizationDetails','createAmazonMotors','createConfirmDeliveryDetails','createConfirmOrderDetails','createConfirmServiceDetails','createDigitalAccessKey','createLegalDisclosure','createNegativeFeedbackRemoval','createUnexpectedProblem','createWarranty'];
	
public		$messagingAction;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
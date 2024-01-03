<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The ConversationRelation model of the messenger.
 */
abstract class ConversationRelation 
{

	const RELATION_TYPE_CONTACT = 'contact';

	const RELATION_TYPE_ORDER = 'order';

	const RELATION_TYPE_EMAIL = 'email';

	const RELATION_TYPE_PAYMENT = 'payment';

	const RELATION_TYPE_USER = 'user';

	const RELATION_ORDER_EXTERNAL_ID = 'orderExternalId';

	const RELATION_TYPE_CONTACT_EMAIL = 'contactEmail';

	const RELATION_TYPE_CONTACT_ID = 'contactId';

	const RELATION_TYPE_CONTACT_NUMBER = 'contactNumber';

	const RELATION_TYPE_INVOICE_NUMBER = 'invoiceNumber';

	const RELATION_TYPE_ORDER_ID = 'orderId';

	const RELATION_AMAZON_ORDER = 'amazonOrder';
	
public		$type;
	
public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
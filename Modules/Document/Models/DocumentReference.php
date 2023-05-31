<?php
namespace Plenty\Modules\Document\Models;


/**
 * The document reference model. A document reference allows you to assign a document to other models.
 */
abstract class DocumentReference 
{

	const ORDER = 'order';

	const REVERSAL_DOCUMENT = 'reversal_document';

	const CUSTOMER = 'customer';

	const CATEGORY = 'category';

	const TICKET = 'ticket';

	const ITEM = 'item';

	const BLOG = 'blog';

	const MULTISHOP = 'multishop';

	const WAREHOUSE = 'warehouse';

	const REORDER = 'reorder';

	const FACET = 'facet';

	const FACET_VALUE = 'facet_value';

	const CASH_REGISTER = 'cash_register';

	const ORDER_SHIPPING_PACKAGE = 'order_shipping_package';

	const ORDER_RETURNS = 'order_returns';

	const ORDER_ARCHIVED = 'order_archived';

	const RELATED_DOCUMENT = 'related_document';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$documentId;
	
public		$type;
	
public		$value;
	
public		$document;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
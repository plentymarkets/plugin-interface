<?php
namespace Plenty\Modules\Tag\V2\Models;


/**
 * The V2 tag relationship model.
 */
abstract class TagRelationship 
{

	const TAG_TYPE_CATEGORY = 'category';

	const TAG_TYPE_TICKET = 'ticket';

	const TAG_TYPE_VARIATION = 'variation';

	const TAG_TYPE_BOARD = 'board';

	const TAG_TYPE_CONTACT = 'contact';

	const TAG_TYPE_ORDER = 'order';

	const TAG_TYPE_MESSENGER = 'messenger';

	const TAG_TYPE_MESSAGE_BILLABLE = 'messageBillable';

	const TAG_TYPE_MESSAGE_CLEARING_SUB_ACCOUNT = 'messageClearingSubAccount';

	const ALLOWED_TYPES = ['category','ticket','variation','board','contact','order','messenger','messageBillable','messageClearingSubAccount'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$tagId;
	
public		$type;
	
public		$value;
	
public		$UUID5;
	
public		$;
	
public		$;
	
public		$tag;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
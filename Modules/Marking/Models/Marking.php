<?php
namespace Plenty\Modules\Marking\Models;


/**
 * Marking
 */
abstract class Marking 
{

	const MARKING_TYPE_ITEM_ONE = 'item_one';

	const MARKING_TYPE_ITEM_TWO = 'item_two';

	const MARKING_TYPE_ORDER = 'order';

	const MARKING_TYPES = ['item_one','item_two','order'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$markId;
	
public		$name;
	
public		$icon;
	
public		$text;
	
public		$type;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
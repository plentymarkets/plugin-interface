<?php
namespace Plenty\Modules\Account\Newsletter\Models;


/**
 * The newsletter folder model.
 */
abstract class Folder 
{

	const DEFAULT_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$isDeletable;
	
public		$isDeleteable;
	
public		$position;
	
public		$isSelectable;
	
public		$numberOfRecipients;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Document\Models;


/**
 * The manual comment model for the document model .
 */
abstract class DocumentComment 
{

	const TYPE_COMMENT = 'comment';

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
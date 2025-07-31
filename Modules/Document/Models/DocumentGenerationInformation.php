<?php
namespace Plenty\Modules\Document\Models;


/**
 * Informations about a document generation.
 */
abstract class DocumentGenerationInformation 
{

	const TYPE_MANUAL = 'manual';

	const TYPE_AUTO = 'auto';

	const UPDATED_AT = 'updatedAt';

	const CREATED_AT = 'createdAt';
	
public		$id;
	
public		$documentId;
	
public		$templateId;
	
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
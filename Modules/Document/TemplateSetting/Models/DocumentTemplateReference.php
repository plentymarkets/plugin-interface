<?php
namespace Plenty\Modules\Document\TemplateSetting\Models;


/**
 * The DocumentBuilder template reference model
 */
abstract class DocumentTemplateReference 
{

	const HEADER = 'header';

	const FOOTER = 'footer';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$templateId;
	
public		$type;
	
public		$referenceTemplateId;
	
public		$documentTemplateSetting;
	
public		$referenceDocumentTemplateSetting;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
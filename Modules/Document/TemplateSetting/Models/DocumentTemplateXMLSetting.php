<?php
namespace Plenty\Modules\Document\TemplateSetting\Models;


/**
 * The DocumentBuilder template XML setting model
 */
abstract class DocumentTemplateXMLSetting 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$templateId;
	
public		$type;
	
public		$value;
	
public		$documentTemplateSetting;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
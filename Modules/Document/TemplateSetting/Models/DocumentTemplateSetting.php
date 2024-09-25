<?php
namespace Plenty\Modules\Document\TemplateSetting\Models;


/**
 * The DocumentBuilder template setting model
 */
abstract class DocumentTemplateSetting 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$defaultTemplate;
	
public		$referenceId;
	
public		$active;
	
public		$documentType;
	
public		$templateName;
	
public		$metaData;
	
public		$fileName;
	
public		$stateChangeDate;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$tags;
	
public		$outputSetting;
	
public		$references;
	
public		$xmlSettings;
	
public		$headerReference;
	
public		$footerReference;
	
public		$referencedBy;
	
public		$headerReferencedBy;
	
public		$footerReferencedBy;
	
public		$typeSettings;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
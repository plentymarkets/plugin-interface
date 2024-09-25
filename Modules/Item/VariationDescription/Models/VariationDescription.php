<?php
namespace Plenty\Modules\Item\VariationDescription\Models;


/**
 * Variation Default Category
 */
abstract class VariationDescription 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$itemId;
	
public		$lang;
	
public		$name;
	
public		$title;
	
public		$name2;
	
public		$name3;
	
public		$previewDescription;
	
public		$metaDescription;
	
public		$description;
	
public		$technicalData;
	
public		$urlPath;
	
public		$metaKeywords;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
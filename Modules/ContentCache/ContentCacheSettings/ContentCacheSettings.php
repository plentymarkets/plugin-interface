<?php
namespace Plenty\Modules\ContentCache\ContentCacheSettings;


/**
 * Eloquent model representing the Content Cache Settings.
 */
abstract class ContentCacheSettings 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$plentyId;
	
public		$contentCacheActive;
	
public		$version;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
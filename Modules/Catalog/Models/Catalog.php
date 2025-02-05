<?php
namespace Plenty\Modules\Catalog\Models;


/**
 * The catalog model - stores on S3
 */
abstract class Catalog 
{

	const BUCKET = 'plentymarkets-catalog';

	const PUBLIC = '';

	const STORAGE = 'catalog';

	const SUBFOLDER = 'catalogs';

	const FILE_EXTENSION = '.json';
	
public		$data;
	
public		$settings;
	
public		$name;
	
public		$template;
	
public		$id;
	
public		$active;
	
public		$with;
	
public		$showMandatoryFields;
	
public		$updatedAt;
	
public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
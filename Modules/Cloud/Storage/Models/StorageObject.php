<?php
namespace Plenty\Modules\Cloud\Storage\Models;


/**
 * Represent a storage object
 */
abstract class StorageObject 
{
	
public		$key;
	
public		$path;
	
public		$lastModified;
	
public		$metaData;
	
public		$eTag;
	
public		$size;
	
public		$storageClass;
	
public		$body;
	
public		$contentType;
	
public		$contentLength;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The key figure config model represents the configuration of a key figure.
 */
abstract class KeyFigureConfig 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$hash;
	
public		$plentyId;
	
public		$plentyIdHash;
	
public		$keyFigure;
	
public		$keyFigureCaption;
	
public		$keyFigureName;
	
public		$filter;
	
public		$targets;
	
public		$meta;
	
public		$spreadSheetExport;
	
public		$direct;
	
public		$freeOfCharge;
	
public		$isGlobal;
	
public		$updatedAt;
	
public		$createdAt;
	
public		$externalId;
	
public		$dimensions;
	
public		$dimensionValues;
	
public		$category;
	
public		$aggregateFunctions;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
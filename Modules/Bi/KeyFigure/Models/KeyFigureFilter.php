<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The key figure filter holds configured filters for a key figure calculation.
 */
abstract class KeyFigureFilter 
{
	
public		$dataFilters;
	
public		$calculation;
	
public		$dimension;
	
public		$customUnit;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
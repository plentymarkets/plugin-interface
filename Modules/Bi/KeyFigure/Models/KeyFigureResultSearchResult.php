<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The key figure result search result model combine key figure information with key figure search result.
 */
abstract class KeyFigureResultSearchResult 
{
	
public		$keyFigureResults;
	
public		$interval;
	
public		$searchId;
	
public		$keyFigure;
	
public		$error;
	
public		$query;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
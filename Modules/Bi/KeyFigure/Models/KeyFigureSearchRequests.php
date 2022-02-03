<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The model represent several key figure search requests.
 */
abstract class KeyFigureSearchRequests 
{
	
public		$globalDataFilters;
	
public		$searchRequests;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
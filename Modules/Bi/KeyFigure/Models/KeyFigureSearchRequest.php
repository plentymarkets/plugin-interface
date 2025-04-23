<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The model holds filter information for a search query for key figures.
 */
abstract class KeyFigureSearchRequest 
{

	const RESULT_LIMIT = 600;
	
public		$configId;
	
public		$interval;
	
public		$dimension;
	
public		$dimensions;
	
public		$scaleBasis;
	
public		$resultId;
	
public		$resultUnit;
	
public		$target;
	
public		$groupByDimension;
	
public		$aggregateFunction;
	
public		$itemsPerPage;
	
public		$page;
	
public		$searchId;
	
public		$calculatedAt;
	
public		$sortBy;
	
public		$displayZeroPrimaryValue;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
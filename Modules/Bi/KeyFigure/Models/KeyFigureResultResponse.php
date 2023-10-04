<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The model represent a key figure result in condensed form to the presentation.
 */
abstract class KeyFigureResultResponse 
{
	
public		$id;
	
public		$scaleBasis;
	
public		$scaleBasisInt;
	
public		$dimension;
	
public		$primaryResult;
	
public		$furtherResult;
	
public		$resultUnit;
	
public		$target;
	
public		$keyFigureName;
	
public		$calculatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
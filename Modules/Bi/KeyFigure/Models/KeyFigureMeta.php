<?php
namespace Plenty\Modules\BI\KeyFigure\Models;


/**
 * The key figure meta holds additional data.
 */
abstract class KeyFigureMeta 
{
	
public		$comment;
	
public		$creatorUserId;
	
public		$creatorRealName;
	
public		$isLimitEditing;
	
public		$numberFormatLang;
	
public		$formatResult;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
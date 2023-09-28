<?php
namespace Plenty\Modules\Flow\DataModels\ConfigForm;


/**
 * The checkbox value field model.
 */
abstract class CheckboxValue 
{
	
public		$caption;
	
public		$value;
	
public		$translateCaption;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
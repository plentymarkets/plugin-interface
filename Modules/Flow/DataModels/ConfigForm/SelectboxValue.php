<?php
namespace Plenty\Modules\Flow\DataModels\ConfigForm;


/**
 * The selectbox value model.
 */
abstract class SelectboxValue 
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
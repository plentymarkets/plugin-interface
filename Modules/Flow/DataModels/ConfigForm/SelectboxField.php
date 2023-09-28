<?php
namespace Plenty\Modules\Flow\DataModels\ConfigForm;


/**
 * The selectbox field model.
 */
abstract class SelectboxField 
{

	const TYPE_DATE = 'date';

	const TYPE_TIME = 'time';

	const TYPE_INPUT = 'input';

	const TYPE_CHECKBOX = 'checkbox';

	const TYPE_SELECTBOX = 'selectbox';

	const TYPE_CHECK_BOX_GROUP = 'checkboxGroup';

	const TYPE_HYPERLINK = 'hyperlink';
	
public		$name;
	
public		$label;
	
public		$value;
	
public		$type;
	
public		$selectBoxValues;
	
public		$isVisible;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
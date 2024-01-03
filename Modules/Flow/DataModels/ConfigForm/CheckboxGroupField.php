<?php
namespace Plenty\Modules\Flow\DataModels\ConfigForm;


/**
 * The checkbox group field model.
 */
abstract class CheckboxGroupField 
{

	const TYPE_DATE = 'date';

	const TYPE_TIME = 'time';

	const TYPE_INPUT = 'text';

	const TYPE_NUMBER = 'number';

	const TYPE_DOUBLE = 'double';

	const TYPE_CHECKBOX = 'checkbox';

	const TYPE_SELECTBOX = 'selectbox';

	const TYPE_CHECK_BOX_GROUP = 'checkboxGroup';

	const TYPE_HYPERLINK = 'hyperlink';

	const TYPE_TEXTAREA = 'textarea';
	
public		$selectBoxValues;
	
public		$formGroup;
	
public		$formGroupValues;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
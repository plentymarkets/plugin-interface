<?php
namespace Plenty\Modules\Flow\Contracts;

use Plenty\Modules\Flow\DataModels\ConfigForm\CheckboxField;
use Plenty\Modules\Flow\DataModels\ConfigForm\CheckboxGroupField;
use Plenty\Modules\Flow\DataModels\ConfigForm\DateField;
use Plenty\Modules\Flow\DataModels\ConfigForm\FormField;
use Plenty\Modules\Flow\DataModels\ConfigForm\HyperlinkField;
use Plenty\Modules\Flow\DataModels\ConfigForm\InputField;
use Plenty\Modules\Flow\DataModels\ConfigForm\SelectboxField;
use Plenty\Modules\Flow\DataModels\ConfigForm\TimeField;

/**
 * Add fields to config form.
 */
interface UIConfigFormContract 
{

	/**
	 * Add a  date field to the config form
	 */
	public function addDateField(
		DateField $dateField, 
		string $key = "key"
	);

	/**
	 * Add a time field to the config form
	 */
	public function addTimeField(
		TimeField $timeField, 
		string $key = "key"
	);

	/**
	 * Add an input field to the config form
	 */
	public function addInputField(
		InputField $inputField, 
		string $key = "key"
	);

	/**
	 * Add a checkbox field to the config form
	 */
	public function addCheckboxField(
		CheckboxField $checkboxField, 
		string $key = "key"
	);

	/**
	 * Add a selectbox field to the config form
	 */
	public function addSelectboxField(
		SelectboxField $selectboxField, 
		string $key = "key"
	);

	/**
	 * Add a checkboxGroup field to the config form
	 */
	public function addCheckboxGroupField(
		CheckboxGroupField $checkboxGroupField, 
		string $key = "key"
	);

	/**
	 * Add a  hyperlink field to the config form
	 */
	public function addHyperlinkField(
		HyperlinkField $hyperlinkField, 
		string $key = "key"
	);

	/**
	 * Get the list with the config fields
	 */
	public function getConfigFields(
	):array;

}
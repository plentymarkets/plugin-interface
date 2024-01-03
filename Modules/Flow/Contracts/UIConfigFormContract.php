<?php
namespace Plenty\Modules\Flow\Contracts;

use Plenty\Modules\Flow\DataModels\ConfigForm\CheckboxField;
use Plenty\Modules\Flow\DataModels\ConfigForm\CheckboxGroupField;
use Plenty\Modules\Flow\DataModels\ConfigForm\DateField;
use Plenty\Modules\Flow\DataModels\ConfigForm\DoubleField;
use Plenty\Modules\Flow\DataModels\ConfigForm\FormField;
use Plenty\Modules\Flow\DataModels\ConfigForm\HyperlinkField;
use Plenty\Modules\Flow\DataModels\ConfigForm\InputField;
use Plenty\Modules\Flow\DataModels\ConfigForm\NumberField;
use Plenty\Modules\Flow\DataModels\ConfigForm\SelectboxField;
use Plenty\Modules\Flow\DataModels\ConfigForm\TextAreaField;
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
	 * Add a number input field to the config form
	 */
	public function addNumberField(
		NumberField $numberField, 
		string $key = "key"
	);

	/**
	 * Add an double input field to the config form
	 */
	public function addDoubleField(
		DoubleField $doubleField, 
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
	 * Add a text area field to the config form
	 */
	public function addTextAreaField(
		TextAreaField $textAreaField, 
		string $key = "key"
	);

	/**
	 * Get the list with the config fields
	 */
	public function getConfigFields(
	):array;

}
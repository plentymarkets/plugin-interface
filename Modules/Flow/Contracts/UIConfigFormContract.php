<?php
namespace Plenty\Modules\Flow\Contracts;

use Plenty\Modules\Flow\DataModels\ConfigForm\CheckboxField;
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
		DateField $dateField
	);

	/**
	 * Add a time field to the config form
	 */
	public function addTimeField(
		TimeField $timeField
	);

	/**
	 * Add an input field to the config form
	 */
	public function addInputField(
		InputField $inputField
	);

	/**
	 * Add a checkbox field to the config form
	 */
	public function addCheckboxField(
		CheckboxField $checkboxField
	);

	/**
	 * Add a selectbox field to the config form
	 */
	public function addSelectboxField(
		SelectboxField $selectboxField
	);

	/**
	 * Add a  hyperlink field to the config form
	 */
	public function addHyperlinkField(
		HyperlinkField $hyperlinkField
	);

	/**
	 * Get the list with the config fields
	 */
	public function getConfigFields(
	):array;

}
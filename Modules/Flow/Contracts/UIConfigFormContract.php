<?php
namespace Plenty\Modules\Flow\Contracts;

use Plenty\Modules\Fulfillment\DataModels\ConfigForm\CheckboxField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\DateField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\FormField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\HyperlinkField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\InputField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\SelectboxField;
use Plenty\Modules\Fulfillment\DataModels\ConfigForm\TimeField;

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
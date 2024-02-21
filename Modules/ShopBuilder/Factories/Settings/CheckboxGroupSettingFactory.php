<?php
namespace Plenty\Modules\ShopBuilder\Factories\Settings;

use Plenty\Modules\ContentBuilder\Factories\Settings\CheckboxGroupSettingFactory as CoreCheckboxGroupSettingFactory;

/**
 * Factory to define a checkbox group in the widget settings.
 */
abstract class CheckboxGroupSettingFactory 
{

	/**
	 * Collapse or expand the group by default. The group can be toggled by the user.
	 */
	abstract public function withCollapsed(
		bool $collapsed
	):self;

	/**
	 * Set available checkboxes of the group.
	 */
	abstract public function withCheckboxValues(
		array $checkboxValues
	):self;

	/**
	 * Set the default value of the group. This should be an array of values.
	 */
	abstract public function withDefaultValue(
		array $defaultValue
	):self;

	abstract public static function create(
		 $data = []
	);

	/**
	 * Set the type of the setting.
	 */
	abstract public function withType(
		string $type
	):self;

	/**
	 * Set a condition if the setting should be visible or not.
	 */
	abstract public function withCondition(
		string $condition
	):self;

	/**
	 * Set the name of the setting.
	 */
	abstract public function withName(
		string $name
	):self;

	/**
	 * Set an option for the setting.
	 */
	abstract public function withOption(
		string $key, 
		 $value
	):self;

	/**
	 * Set a tooltip text for this input
	 */
	abstract public function withTooltip(
		string $tooltip
	):self;

	/**
	 * Define the tooltip placement. Possible values are 'bottom', 'top', 'left' or 'right', default is 'top'
	 */
	abstract public function withTooltipPlacement(
		string $tooltipPlacement
	):self;

	/**
	 * Determines whether the declaration is used to render a list of the specified form field.
	 */
	abstract public function withList(
		int $min = 0, 
		int $max = 0
	):self;

	/**
	 * Get all data as array
	 */
	abstract public function toArray(
	):array;

}
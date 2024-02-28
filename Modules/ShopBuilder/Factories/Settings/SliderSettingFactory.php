<?php
namespace Plenty\Modules\ShopBuilder\Factories\Settings;

use Plenty\Modules\ContentBuilder\Factories\Settings\SliderSettingFactory as CoreSliderSettingFactory;

/**
 * Factory to define a slider in the widget settings.
 */
abstract class SliderSettingFactory 
{

	/**
	 * Set the minimum value of the slider.
	 */
	abstract public function withMin(
		int $min
	):self;

	/**
	 * Set the maximum value of the slider.
	 */
	abstract public function withMax(
		int $max
	):self;

	/**
	 * Set the interval between the values of the slider.
	 */
	abstract public function withInterval(
		int $interval
	):self;

	/**
	 * Set the number of decimal places of the value.
	 */
	abstract public function withPrecision(
		int $precision
	):self;

	/**
	 * Set to true to display the minimum and maximum values at each end of the slider.
	 */
	abstract public function withShowMinMax(
		bool $showMinMax
	):self;

	/**
	 * Set to true to display ticks on each value.
	 */
	abstract public function withShowTicks(
		bool $showTicks
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
	 * Set the default value for the setting.
	 */
	abstract public function withDefaultValue(
		 $defaultValue
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
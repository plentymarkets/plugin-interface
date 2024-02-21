<?php
namespace Plenty\Modules\ShopBuilder\Factories\Settings;

use Plenty\Modules\ContentBuilder\Factories\Settings\FileSettingFactory as CoreFileSettingFactory;

/**
 * Factory to define a file input in the widget settings.
 */
abstract class FileSettingFactory 
{

	/**
	 * Display the preview of the selected file.
	 */
	abstract public function withShowPreview(
		bool $showPreview
	):self;

	/**
	 * Restrict allowed file extensions.
	 */
	abstract public function withAllowedExtensions(
		array $allowedExtensions
	):self;

	/**
	 * Set to true if the user should be allowed to create new folders.
	 */
	abstract public function withFoldersAllowed(
		bool $foldersAllowed
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
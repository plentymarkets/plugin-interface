<?php
namespace Plenty\Modules\ShopBuilder\Factories\Settings;

use Plenty\Modules\ContentBuilder\Factories\Settings\ValueListFactory as CoreValueListFactory;

/**
 * Create a list of values to be used by settings with multiple predefined values.
 */
abstract class ValueListFactory 
{

	/**
	 * Create a new factory instance.
	 */
	abstract public static function make(
	):self;

	/**
	 * Add an entry to the list of values
	 */
	abstract public function addEntry(
		 $value, 
		string $caption
	):self;

	/**
	 * Get all values.
	 */
	abstract public function toArray(
	);

}
<?php
namespace Plenty\Modules\MyView\Contracts;

use Plenty\Modules\MyView\Models\PresetContainerElement;

/**
 * This container contains presets registered at boot time
 */
interface PresetContainerContract 
{

	/**
	 * Register an array of presets
	 */
	public function registerPresets(
		array $presets
	);

	/**
	 * Returns an array of preset-container collections
	 */
	public function getAll(
	):array;

	/**
	 * Get all presets for a given my-view key
	 */
	public function getPresetsForMyViewKey(
		string $myViewKey
	):array;

	/**
	 * Get all presets from which the my-view key starts with the given string
	 */
	public function getPresetsStartingWithMyViewKey(
		string $myViewKeyStartsWith
	):array;

	/**
	 * Get all default presets from which the my-view key starts with the given string
	 */
	public function getDefaultPresetsStartingWithMyViewKey(
		string $myViewKeyStartsWith
	):array;

}
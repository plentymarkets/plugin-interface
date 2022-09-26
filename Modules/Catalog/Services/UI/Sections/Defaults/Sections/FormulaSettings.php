<?php
namespace Plenty\Modules\Catalog\Services\UI\Sections\Defaults\Sections;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionContract;
use Plenty\Modules\Catalog\Contracts\UI\UIOptionsContract;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\CheckboxUIOption;
use Plenty\Modules\Catalog\Services\UI\Sections\Section\Section;

/**
 * FormulaSettings
 */
abstract class FormulaSettings extends \Plenty\Modules\Catalog\Services\UI\Sections\Section\Section 

{

	const FORMULA_SETTINGS = 'formulaSettings';

	const DEFAULT_NULL_TO_ZERO = 'useZeroDefault';

	abstract public function getLabel(
	):string;

	/**
	 * Add an option
	 */
	abstract public function add(
		UIOptionContract $option, 
		string $key = null
	):UIOptionsContract;

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

	/**
	 * Setter for label property
	 */
	abstract public function setLabel(
		string $label
	):Section;

	/**
	 * Getter for the key property
	 */
	abstract public function getKey(
	):string;

	/**
	 * Setter for the key property
	 */
	abstract public function setKey(
		string $key
	):Section;

}
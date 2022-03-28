<?php
namespace Plenty\Modules\Catalog\Contracts\UI;

use Illuminate\Contracts\Support\Arrayable;

/**
 * The UIOptionContract is the interface for an individual catalogue option. This interface allows you to define UI options. The options are settings in the settings menu that can be defined in the backend.
 */
interface UIOptionContract 
{

	public function getKey(
	):string;

	public function getLabel(
	):string;

	public function getType(
	):string;

	public function isVisible(
	):bool;

	public function isDisabled(
	):bool;

	public function isRequired(
	):bool;

	public function getDefaultValue(
	);

	public function getValues(
	):UIValuesContract;

	public function getChildren(
	):UIOptionsContract;

	public function setKey(
		string $key
	):UIOptionContract;

	public function setLabel(
		string $label
	):UIOptionContract;

	public function setType(
		string $type
	):UIOptionContract;

	public function setDefaultValue(
		 $defaultValue
	):UIOptionContract;

	public function setVisible(
		bool $visible
	):UIOptionContract;

	public function setDisabled(
		bool $disabled
	):UIOptionContract;

	public function setRequired(
		bool $required
	):UIOptionContract;

	public function setValues(
		UIValuesContract $values
	):UIOptionContract;

	public function setChildren(
		UIOptionsContract $children
	):UIOptionContract;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}
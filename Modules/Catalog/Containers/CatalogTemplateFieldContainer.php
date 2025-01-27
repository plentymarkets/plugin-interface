<?php
namespace Plenty\Modules\Catalog\Containers;

use InvalidArgumentException;
use Plenty\Modules\Catalog\Constants\CatalogMappingTypes;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldContract;

/**
 * The CatalogTemplateFieldContainer collects and returns multiple CatalogTemplateFields.
 */
abstract class CatalogTemplateFieldContainer 
{

	/**
	 * Add a field to the container.
	 */
	abstract public function addField(
		CatalogTemplateFieldContract $field
	);

	/**
	 * Get a specified field out of the container.
	 */
	abstract public function getField(
		string $key
	):CatalogTemplateFieldContract;

	/**
	 * Get all fields that are collected in the container.
	 */
	abstract public function getFields(
	):array;

	abstract public function toArray(
	):array;

}
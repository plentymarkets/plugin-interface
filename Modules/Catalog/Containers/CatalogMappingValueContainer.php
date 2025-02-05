<?php
namespace Plenty\Modules\Catalog\Containers;

use Plenty\Modules\Catalog\Models\CatalogMappingValue;

/**
 * The CatalogMappingValueContainer collects and returns multiple CatalogMappingValues.
 */
abstract class CatalogMappingValueContainer 
{

	/**
	 * Add a mapping value to the container
	 */
	abstract public function addMappingValue(
		CatalogMappingValue $value
	);

	/**
	 * Get all mapping values that are collected in the container.
	 */
	abstract public function getMappingValues(
	):array;

	abstract public function toArray(
	):array;

}
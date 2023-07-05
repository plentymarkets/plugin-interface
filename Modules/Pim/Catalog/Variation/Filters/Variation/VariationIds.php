<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Variation;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\VariationBaseFilter;

/**
 * Used to represent the VariationIsActive filter in both the catalog export and UI.
 */
abstract class VariationIds implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationBaseId';

	abstract public function getKey(
	):string;

	/**
	 * This method will be called in the export process if the filter was registered as a custom filter. In the
template definition this should not be called. Use the specific setter methods instead.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Will return a VariationBaseFilter if shouldBeActive is defined. Otherwise null will be returned
	 */
	abstract public function getFilter(
		array $settings = []
	):VariationBaseFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setVariationIds(
		int $variationIds
	):self;

	/**
	 * Fluent setter
	 */
	abstract public function setRequired(
		bool $required
	):self;

	/**
	 * Fluent setter
	 */
	abstract public function setIsVisible(
		bool $isVisible
	):self;

}
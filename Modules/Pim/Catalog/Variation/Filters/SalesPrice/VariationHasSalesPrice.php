<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\SalesPrice;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\SalesPriceContainer;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\TagContainer;
use Plenty\Modules\Pim\SearchService\Filter\SalesPriceFilter;
use Plenty\Modules\Pim\SearchService\Filter\TagFilter;

/**
 * Used to represent the VariationHasSalesPrice filter in both the catalog export and UI.
 */
abstract class VariationHasSalesPrice implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationHasSalesPrice';

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
	 * Will return a TagFilter if at least one tag id is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):SalesPriceFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setSalesPricesIds(
		int $salesPricesIds
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
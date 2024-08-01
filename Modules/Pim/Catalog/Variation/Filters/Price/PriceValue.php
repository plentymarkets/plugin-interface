<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Price;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterContainer;
use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\SalesPriceContainer;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\TagContainer;
use Plenty\Modules\Pim\SearchService\Filter\PriceFilter;

/**
 * Used to filter by sales price
 */
abstract class PriceValue implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'priceValue';

	const SALES_PRICE = 2;

	abstract public function getKey(
	):string;

	/**
	 * Returns the filter that will be given to the export
	 */
	abstract public function getFilter(
		array $settings = []
	);

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setFilterData(
		 $filterData
	);

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
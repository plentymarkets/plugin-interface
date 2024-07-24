<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Stock;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\StockFilter;

/**
 * Used to filter by variation stock physical
 */
abstract class StockPhysical implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'stockPhysical';

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
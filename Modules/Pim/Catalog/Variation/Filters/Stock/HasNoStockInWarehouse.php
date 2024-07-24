<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Stock;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\WarehouseContainer;
use Plenty\Modules\Pim\SearchService\Filter\WarehouseFilter;

/**
 * Used to filter by stock in warehouse
 */
abstract class HasNoStockInWarehouse implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'hasNoStockInWarehouse';

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

	abstract public function setWarehouseIds(
		 $warehouseIds
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
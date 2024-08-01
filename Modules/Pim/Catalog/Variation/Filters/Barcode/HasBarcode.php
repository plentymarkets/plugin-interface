<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Barcode;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Item\Barcode\Contracts\BarcodeRepositoryContract;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\BarcodeContainer;
use Plenty\Modules\Pim\SearchService\Filter\BarcodeFilter;

/**
 * Used to represent the hasBarcode filter in both the catalog export and UI.
 */
abstract class HasBarcode implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'hasBarcode';

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
	 * Will return a Hasbarcode if a item type is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):BarcodeFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setHasBarcode(
		int $hasBarcode
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
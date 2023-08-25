<?php
namespace Plenty\Modules\Order\Catalogues\Order\Template\Filters;

use Illuminate\Support\Facades\App;
use Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;

/**
 * Used to represent the order item variation filter in both the catalog export and UI.
 */
abstract class OrderItemVariationIdFilterBuilder implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const TRANS_PATH = 'module_order::catalogues.';

	/**
	 * Returns an identifier for the filter
	 */
	abstract public function getKey(
	):string;

	/**
	 * This method will be filled by the specified values in a catalog. It should be used to provide
the necessary manipulation so the filter that is returned by getFilter can be consumed by the export.
	 */
	abstract public function setFilterData(
		 $filterData
	);

	/**
	 * Returns the filter that will be given to the export
	 */
	abstract public function getFilter(
		array $settings = []
	);

	/**
	 * Returns the UI representation of the filter
	 */
	abstract public function getUiFilter(
	):CatalogUiFilter;

}
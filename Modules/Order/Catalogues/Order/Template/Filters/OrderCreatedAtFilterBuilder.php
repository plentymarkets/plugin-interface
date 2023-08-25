<?php
namespace Plenty\Modules\Order\Catalogues\Order\Template\Filters;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\Base\OrderDateBaseFilterBuilder;

/**
 * Used to represent the order created at filter in both the catalog export and UI.
 */
abstract class OrderCreatedAtFilterBuilder implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const TRANS_PATH = 'module_order::catalogues.';

	abstract public function getKey(
	);

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setFilterData(
		 $filterData
	);

	abstract public function getFilter(
		array $settings = []
	);

}
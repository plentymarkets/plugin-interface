<?php
namespace Plenty\Modules\Order\Catalogues\Order\Template\Filters;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Order\Catalogues\Order\Template\Filters\Base\OrderDateBaseFilterBuilder;
use Plenty\Modules\Order\Date\Models\OrderDateType;

/**
 * Used to represent the order paid at filter in both the catalog export and UI.
 */
abstract class OrderPaidAtFilterBuilder implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

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
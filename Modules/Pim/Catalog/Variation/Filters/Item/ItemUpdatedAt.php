<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Item;

use Carbon\Carbon;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\DateFilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\ItemUpdatedAtFilter;

/**
 * Used to represent the ItemUpdatedAtFilter in both the catalog export and UI.
 */
abstract class ItemUpdatedAt implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'itemUpdatedAt';

	const OPERATOR = 'operator';

	const FIRST_DATE = 'firstDate';

	const SECOND_DATE = 'secondDate';

	const LAST_DAYS = 'lastDays';

	const OPERATORS = ['today','lastDays','period','yesterday','=','>','<','>=','<=','!='];

	abstract public function getKey(
	):string;

	/**
	 * Will return a TypeInterface filter if at least one flat file is provided. Otherwise null is returned.
	 */
	abstract public function getFilter(
		array $settings = []
	):ItemUpdatedAtFilter;

	abstract public function setFilterData(
		 $filterData
	);

	abstract public function setTimeWindow(
		Carbon $fromDate, 
		Carbon $toDate = null
	);

	abstract public function getUiFilter(
	):CatalogUiFilter;

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
<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\BundleType;

use Plenty\Modules\Catalog\Containers\Filters\CatalogUiFilterSelectionValueContainer;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilterSelectionValue;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\SearchService\Filter\VariationBundleFilter;

/**
 * Used to represent the hasBundleType filter in both the catalog export and UI.
 */
abstract class VariationHasAtLeastOneBundleType implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const NO_BUNDLE = 'default';

	const BUNDLE = 'bundle';

	const BUNDLE_ITEM = 'bundle_item';

	const IS_NOT_BUNDLE = 'is_not_bundle';

	const BUNDLE_TYPES = ['default','bundle','bundle_item','is_not_bundle'];

	const KEY = 'variationIsBundleType';

	abstract public function getKey(
	):string;

	abstract public function setFilterData(
		 $filterData
	);

	abstract public function getFilter(
		array $settings = []
	):VariationBundleFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setBundleTypes(
		array $bundleTypes
	):self;

	abstract public function addBundleType(
		string $bundleType
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
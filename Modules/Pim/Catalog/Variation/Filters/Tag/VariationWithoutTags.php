<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters\Tag;

use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Pim\Catalog\Variation\Filters\FilterBuilder;
use Plenty\Modules\Pim\Catalog\Variation\Filters\SelectionValueContainers\TagContainer;
use Plenty\Modules\Pim\SearchService\Filter\TagFilter;

/**
 * Used to represent the ItemWithoutTags filter in both the catalog export and UI.
 */
abstract class VariationWithoutTags implements \Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract

{

	const KEY = 'variationWithoutTags';

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
	):TagFilter;

	abstract public function getUiFilter(
	):CatalogUiFilter;

	abstract public function setTagIds(
		int $tagIds
	):self;

	abstract public function addTagId(
		int $tagId
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
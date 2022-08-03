<?php
namespace Plenty\Modules\Catalog\Templates;

use Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer;
use Plenty\Modules\Catalog\Containers\TemplateGroupContainer;
use Plenty\Modules\Catalog\Contracts\CatalogDynamicConfigContract;
use Plenty\Modules\Catalog\Contracts\CatalogGroupedTemplateProviderContract;
use Plenty\Modules\Catalog\Contracts\CatalogMutatorContract;
use Plenty\Modules\Catalog\Contracts\CatalogResultConverterContract;
use Plenty\Modules\Catalog\Contracts\CatalogRuntimeConfigContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;
use Plenty\Modules\Catalog\Models\Filters\CatalogUiFilter;
use Plenty\Modules\Catalog\Services\Cache\Intervals\Intervals;
use Plenty\Modules\Catalog\Services\Converter\Containers\ResultConverterContainer;
use Plenty\Modules\Catalog\Services\UI\Sections\Section\Section;
use Plenty\Modules\Catalog\Services\UI\Sections\Sections;
use Plenty\Modules\Catalog\Validators\FilterValidator;
use Plenty\Modules\Catalog\Validators\GeneralFieldValidator;
use Plenty\Modules\Catalog\Validators\MappingValidator;
use Plenty\Modules\Catalog\Validators\SettingValidator;

/**
 * Templates are used to define a schema for the creation of catalogues.
 */
abstract class Template implements TemplateContract

{

	/**
	 * Returns the mappings of a template.
	 */
	abstract public function getMappings(
	):array;

	/**
	 * Adds a mapping to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function addMapping(
		array $section
	);

	abstract public function addMutator(
		callable $callback
	);

	abstract public function getMutators(
	):array;

	/**
	 * Adds a pre mutator to the template. Pre mutators are applied to the export data before the mapping occurs. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function addPreMutator(
		callable $callback
	);

	/**
	 * Adds a post mutator to the template. Post mutators are applied to the export data once the mapping occurred. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function addPostMutator(
		callable $callback
	);

	/**
	 * Returns the filters of the template.
	 */
	abstract public function getFilter(
	):array;

	/**
	 * Adds a filter to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function addFilter(
		array $filter
	);

	/**
	 * Returns the pre mutators of the template.
	 */
	abstract public function getPreMutators(
	):array;

	/**
	 * Returns the post mutators of the template.
	 */
	abstract public function getPostMutators(
	):array;

	/**
	 * Defines the callback function that will be called after the mapping is done for a field with the key "sku".
	 */
	abstract public function setSkuCallback(
		callable $callback
	);

	/**
	 * Returns the callback function that will be called after the mapping is done for a field with the key "sku"
	 */
	abstract public function getSkuCallback(
	):callable;

	/**
	 * Adds a setting to the templates. Settings create components in the UI of catalogues which use this template. The components will provide data for the export in accordance with the user input in the catalogue. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function addSetting(
		array $setting
	);

	/**
	 * Returns the settings of a template.
	 */
	abstract public function getSettings(
	):array;

	/**
	 * Sets the meta info for a template. Meta info is used to provide data which has to be known when working with the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function setMetaInfo(
		array $meta
	);

	abstract public function getMetaInfo(
	);

	abstract public function getGroupContainer(
	):TemplateGroupContainer;

	abstract public function addGroupContainer(
		TemplateGroupContainer $groupContainer
	);

	abstract public function getPreMutator(
	):CatalogMutatorContract;

	abstract public function getPostMutator(
	):CatalogMutatorContract;

	abstract public function setPreMutator(
		CatalogMutatorContract $preMutator
	);

	abstract public function setPostMutator(
		CatalogMutatorContract $postMutator
	);

	/**
	 * Returns the custom filters of the template.
	 */
	abstract public function getCustomFilter(
	):array;

	/**
	 * Adds a custom filter to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function addCustomFilter(
		array $customFilter
	);

	/**
	 * Returns general assignments.
	 */
	abstract public function getAssignments(
	):array;

	/**
	 * Adds a general assignments to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	abstract public function addAssignment(
		array $assignment
	);

	/**
	 * Returns sections
	 */
	abstract public function getSections(
	):Sections;

	/**
	 * Sets sections
	 */
	abstract public function setSections(
		Sections $sections
	);

	/**
	 * Gets devcache intervals
	 */
	abstract public function getDevcacheIntervals(
	):Intervals;

	/**
	 * Sets devcache intervals
	 */
	abstract public function setDevcacheIntervals(
		Intervals $intervals
	);

	abstract public function getName(
	):string;

	abstract public function getExportType(
	):string;

	abstract public function getType(
	):string;

	abstract public function translatedToArray(
		string $language
	):array;

	abstract public function toArray(
	):array;

	abstract public function jsonSerialize(
	);

	abstract public function getIdentifier(
	):string;

	abstract public function getFormatSettings(
	):array;

	abstract public function getExportSettings(
	):array;

	abstract public function isPreviewable(
	):bool;

	abstract public function allowPreview(
		bool $isPreviewable
	);

	abstract public function allowExtendedMappings(
		bool $allowExtendedMappings
	);

	abstract public function allowsCustomFilter(
	):bool;

	abstract public function allowCustomFilter(
		bool $allowsCustomFilter
	);

	abstract public function setCustomFilters(
		bool $allowsCustomFilter
	):bool;

	abstract public function getRuntimeConfig(
	):CatalogRuntimeConfigContract;

	abstract public function getResultConverter(
	):CatalogResultConverterContract;

	abstract public function hasRuntimeConfig(
	):bool;

	abstract public function hasResultConverter(
	):bool;

	abstract public function getDefaultCatalogSettings(
	):array;

	abstract public function setDefaultCatalogSettings(
		array $defaultCatalogSettings
	);

	abstract public function getResultConverterContainer(
	):ResultConverterContainer;

	abstract public function hasExtendedMappings(
	):bool;

	abstract public function getDynamicConfig(
	):CatalogDynamicConfigContract;

	abstract public function fastBoot(
		 $provider
	);

	abstract public function isBooted(
	):bool;

	abstract public function isFastBooted(
	):bool;

	abstract public function getCustomFilterContainer(
	):CatalogFilterBuilderContainer;

	abstract public function getFilterContainer(
	):CatalogFilterBuilderContainer;

	abstract public function setCustomFilterContainer(
		CatalogFilterBuilderContainer $customFilterContainer
	);

	abstract public function setFilterContainer(
		CatalogFilterBuilderContainer $filterContainer
	);

}
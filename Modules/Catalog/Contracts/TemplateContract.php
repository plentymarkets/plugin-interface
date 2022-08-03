<?php
namespace Plenty\Modules\Catalog\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer;
use Plenty\Modules\Catalog\Containers\TemplateGroupContainer;
use Plenty\Modules\Catalog\Services\Cache\Intervals\Intervals;
use Plenty\Modules\Catalog\Services\Converter\Containers\ResultConverterContainer;
use Plenty\Modules\Catalog\Services\UI\Sections\Sections;

/**
 * The TemplateContract is the interface for templates. Templates are used to define a specific schema that can be used to create and configure a catalogue.
 */
interface TemplateContract 
{

	/**
	 * Returns the name of the template.
	 */
	public function getName(
	):string;

	/**
	 * Returns the type of the template.
	 */
	public function getType(
	):string;

	/**
	 * Returns the export type of the template.
	 */
	public function getExportType(
	):string;

	/**
	 * Returns the mappings of a template.
	 */
	public function getMappings(
	):array;

	/**
	 * Adds a mapping to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addMapping(
		array $mapping
	);

	/**
	 * Returns a container that contains all groups of fields that are present in this template. Each group will represent a portlet in the catalog UI. The order of the portlets is identical to the order the groups were added to the container.
	 */
	public function getGroupContainer(
	):TemplateGroupContainer;

	/**
	 * Adds a group of fields to the template. Those groups will be displayed in the UI. The position in the UI depends
on the order of adding the groups to the template.
	 */
	public function addGroupContainer(
		TemplateGroupContainer $groupContainer
	);

	public function addMutator(
		callable $callback
	);

	/**
	 * Adds a pre mutator to the template. Pre mutators are applied to the export data before the mapping occurs. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addPreMutator(
		callable $callback
	);

	/**
	 * Adds a post mutator to the template. Post mutators are applied to the export data once the mapping occurred. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addPostMutator(
		callable $callback
	);

	/**
	 * Defines the pre mutator of the template. The pre mutator is applied to the export data before the mapping occurs. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function setPreMutator(
		CatalogMutatorContract $preMutator
	);

	/**
	 * Defines the post mutator of the template. The post mutator is applied to the export data once the mapping occurred. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function setPostMutator(
		CatalogMutatorContract $postMutator
	);

	/**
	 * Returns the filters of the template.
	 */
	public function getFilter(
	):array;

	/**
	 * Adds a filter to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addFilter(
		array $filter
	);

	/**
	 * Returns the unique identifier of the template.
	 */
	public function getIdentifier(
	):string;

	public function getMutators(
	):array;

	/**
	 * Returns the pre mutators of the template.
	 */
	public function getPreMutators(
	):array;

	/**
	 * Returns the post mutators of the template.
	 */
	public function getPostMutators(
	):array;

	/**
	 * Returns the pre mutator of the template.
	 */
	public function getPreMutator(
	):CatalogMutatorContract;

	/**
	 * Returns the post mutator of the template.
	 */
	public function getPostMutator(
	):CatalogMutatorContract;

	/**
	 * Defines the callback function that will be called after the mapping is done for a field with the key "sku".
	 */
	public function setSkuCallback(
		callable $callback
	);

	/**
	 * Retrieves the callback function that will be called after the mapping is done for a field with the key "sku".
	 */
	public function getSkuCallback(
	):callable;

	/**
	 * Adds a setting to the templates. Settings create components in the UI of catalogues which use this template. The components will provide data for the export in accordance with the user input in the catalogue. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addSetting(
		array $setting
	);

	/**
	 * Returns the settings of a template.
	 */
	public function getSettings(
	):array;

	/**
	 * Returns the sections of a template
	 */
	public function getSections(
	):Sections;

	/**
	 * Sets the meta info for a template. Meta info is used to provide data which has to be known when working with the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function setMetaInfo(
		array $meta
	);

	/**
	 * Returns the meta info of a template.
	 */
	public function getMetaInfo(
	):array;

	/**
	 * Determines if this template supports preview exports
	 */
	public function isPreviewable(
	):bool;

	/**
	 * Used to activate / deactivate the possibility to export previews through this template
	 */
	public function allowPreview(
		bool $isPreviewable
	);

	/**
	 * Used to activate / deactivate the possibility to extend the mappings with fields that are not present in the template
	 */
	public function allowExtendedMappings(
		bool $allowExtendedMappings
	);

	/**
	 * Determines if this template enable/disable custom filters
	 */
	public function allowsCustomFilter(
	):bool;

	/**
	 * Used to activate / deactivate the possibility to apply custom filters
	 */
	public function allowCustomFilter(
		bool $allowsCustomFilter
	);

	/**
	 * Disable or not the custom filters
	 */
	public function setCustomFilters(
		bool $allowsCustomFilter
	):bool;

	public function hasRuntimeConfig(
	):bool;

	public function hasResultConverter(
	):bool;

	public function getRuntimeConfig(
	):CatalogRuntimeConfigContract;

	public function getResultConverter(
	):CatalogResultConverterContract;

	/**
	 * Returns the custom filters of the template.
	 */
	public function getCustomFilter(
	):array;

	/**
	 * Adds a custom filter to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addCustomFilter(
		array $customFilter
	);

	/**
	 * Returns the container that collects all custom filters of this specific template.
	 */
	public function getCustomFilterContainer(
	):CatalogFilterBuilderContainer;

	/**
	 * Returns the container that collects all filters of this specific template.
	 */
	public function getFilterContainer(
	):CatalogFilterBuilderContainer;

	/**
	 * Sets the container that collects all custom filters of this specific template.
	 */
	public function setCustomFilterContainer(
		CatalogFilterBuilderContainer $customFilterContainer
	);

	/**
	 * Sets the container that collects all filters of this specific template.
	 */
	public function setFilterContainer(
		CatalogFilterBuilderContainer $filterContainer
	);

	/**
	 * Returns the general assignment of the template.
	 */
	public function getAssignments(
	):array;

	/**
	 * Adds a general assignment to the template. If possible, don't use this directly and let it be handled by the catalogue template provider.
	 */
	public function addAssignment(
		array $assignment
	);

	public function getDynamicConfig(
	):CatalogDynamicConfigContract;

	/**
	 * Returns the current boot state of the template.
	 */
	public function isBooted(
	):bool;

	/**
	 * Returns the current fast boot state of the template.
	 */
	public function isFastBooted(
	):bool;

	public function translatedToArray(
		string $language
	):array;

	/**
	 * Returns the default settings a catalog that is created through this template will contain.
	 */
	public function getDefaultCatalogSettings(
	):array;

	/**
	 * Returns the container including all registered result converters of the template
	 */
	public function getResultConverterContainer(
	):ResultConverterContainer;

	/**
	 * Returns devcache intervals
	 */
	public function getDevcacheIntervals(
	):Intervals;

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

	public function jsonSerialize(
	);

}
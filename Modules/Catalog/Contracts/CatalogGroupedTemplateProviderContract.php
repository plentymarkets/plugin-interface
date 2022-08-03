<?php
namespace Plenty\Modules\Catalog\Contracts;

use Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer;
use Plenty\Modules\Catalog\Containers\TemplateGroupContainer;
use Plenty\Modules\Catalog\Services\Cache\Intervals\Intervals;
use Plenty\Modules\Catalog\Services\Converter\Containers\ResultConverterContainer;
use Plenty\Modules\Catalog\Services\UI\Sections\Sections;

/**
 * The CatalogGroupedTemplateProviderContract is the interface that has to be implemented by the catalogue template providers. Each registered template should have a catalogue template provider (multiple templates can use the same one) to avoid booting them if they are not necessary. A catalogue template provider fills a template with data at the moment the template gets booted.Use the abstract class Plenty\Modules\Catalog\Templates\Providers\AbstractGroupedTemplateProvider.
 */
interface CatalogGroupedTemplateProviderContract 
{

	/**
	 * Returns a container in which all TemplateGroups of this template are collected.
	 */
	public function getTemplateGroupContainer(
	):TemplateGroupContainer;

	/**
	 * Returns the filters that will be applied in each export of templates that will be booted by this provider.
	 */
	public function getFilter(
	):array;

	/**
	 * Returns the Mutator instance that should be called to manipulate data before the mapping.
	 */
	public function getPreMutator(
	):CatalogMutatorContract;

	/**
	 * Returns the Mutator instance that should be called to manipulate data after the mapping.
	 */
	public function getPostMutator(
	):CatalogMutatorContract;

	/**
	 * Returns a callback function that is called if a field with the specific key "sku" got mapped. The function will receive the value that got mapped, the raw data array of this item and the type of the mapped source. It should return the new value (e.g. function ($value, array $item, $mappingType){ --your code-- return $value})).
	 */
	public function getSkuCallback(
	):callable;

	/**
	 * Returns an array of settings that will be displayed in the UI of each catalogue with a template that uses this provider. The selected values for all those settings can then be used in the export.
	 */
	public function getSettings(
	):array;

	/**
	 * Returns an array of meta information which can be used to forward information to the export which could otherwise not be received.
	 */
	public function getMetaInfo(
	):array;

	/**
	 * Returns the custom filters that will be configurable in the catalog UI. Each configured custom filter will be applied in each export of templates that will be booted by this provider.
	 */
	public function getCustomFilters(
	):array;

	public function getAssignments(
	):array;

	/**
	 * Returns the container that collects all filters of templates that are booted by this specific provider.
	 */
	public function getFilterContainer(
	):CatalogFilterBuilderContainer;

	/**
	 * Returns the container that collects all custom filters of templates that are booted by this specific provider.
	 */
	public function getCustomFilterContainer(
	):CatalogFilterBuilderContainer;

	/**
	 * Determines if this template supports extended mappings
	 */
	public function hasExtendedMappings(
	):bool;

	public function isPreviewable(
	):bool;

	public function getDynamicConfig(
	):CatalogDynamicConfigContract;

	public function getResultConverterClass(
	):string;

	public function allowsCustomFilter(
	):bool;

	public function getResultConverterContainer(
	):ResultConverterContainer;

	/**
	 * Defines settings that will be applied to newly created catalogs by default
	 */
	public function getDefaultCatalogSettings(
	):array;

	/**
	 * Register hooks in specific event slots
	 */
	public function getHooks(
	);

	/**
	 * Returns Sections with options that will be displayed in the UI of each catalogue with a template that uses this provider. The selected values for all those settings can then be used in the export.
	 */
	public function getSections(
	):Sections;

	/**
	 * Returns devcache intervals
	 */
	public function getDevcacheIntervals(
	):Intervals;

}
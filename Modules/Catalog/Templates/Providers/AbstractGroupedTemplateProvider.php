<?php
namespace Plenty\Modules\Catalog\Templates\Providers;

use Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer;
use Plenty\Modules\Catalog\Containers\TemplateGroupContainer;
use Plenty\Modules\Catalog\Contracts\CatalogDynamicConfigContract;
use Plenty\Modules\Catalog\Contracts\CatalogGroupedTemplateProviderContract;
use Plenty\Modules\Catalog\Contracts\CatalogMutatorContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;
use Plenty\Modules\Catalog\Dummy\DynamicConfig\EmptyCatalogDynamicConfig;
use Plenty\Modules\Catalog\Dummy\EmptyCatalogMutator;
use Plenty\Modules\Catalog\Services\Cache\Intervals\Intervals;
use Plenty\Modules\Catalog\Services\Converter\Containers\DefaultResultConverterContainer;
use Plenty\Modules\Catalog\Services\Converter\Containers\ResultConverterContainer;
use Plenty\Modules\Catalog\Services\UI\Sections\Sections;

/**
 * The AbstractGroupedTemplateProvider is the abstract class that should be used to implement a template provider.
 */
abstract class AbstractGroupedTemplateProvider implements CatalogGroupedTemplateProviderContract

{

	abstract public function isPreviewable(
	):bool;

	abstract public function allowsCustomFilter(
	):bool;

	abstract public function getDynamicConfig(
	):CatalogDynamicConfigContract;

	/**
	 * Returns the Mutator instance that should be called to manipulate data before the mapping.
	 */
	abstract public function getPreMutator(
	):CatalogMutatorContract;

	/**
	 * Returns the Mutator instance that should be called to manipulate data after the mapping.
	 */
	abstract public function getPostMutator(
	):CatalogMutatorContract;

	/**
	 * Returns a callback function that is called if a field with the specific key "sku" got mapped. The function will receive the value that got mapped, the raw data array of this item and the type of the mapped source. It should return the new value (e.g. function ($value, array $item, $mappingType){ --your code-- return $value})).
	 */
	abstract public function getSkuCallback(
	):callable;

	/**
	 * Returns an array of settings that will be displayed in the UI of each catalogue with a template that uses this provider. The selected values for all those settings can then be used in the export.
	 */
	abstract public function getSettings(
	):array;

	/**
	 * Returns an array of meta information which can be used to forward information to the export which could otherwise not be received.
	 */
	abstract public function getMetaInfo(
	):array;

	abstract public function getCustomFilters(
	):array;

	abstract public function getAssignments(
	):array;

	abstract public function getFilter(
	):array;

	abstract public function hasExtendedMappings(
	):bool;

	abstract public function getResultConverterClass(
	):string;

	/**
	 * Returns a container which contains all result converters for a given template.
	 */
	abstract public function getResultConverterContainer(
	):ResultConverterContainer;

	abstract public function getDefaultCatalogSettings(
	):array;

	/**
	 * Register hooks in specific event slots
	 */
	abstract public function getHooks(
	);

	/**
	 * Gets sections
	 */
	abstract public function getSections(
	):Sections;

	/**
	 * Gets devcache intervals
	 */
	abstract public function getDevcacheIntervals(
	):Intervals;

	/**
	 * Returns a container in which all TemplateGroups of this template are collected.
	 */
	abstract public function getTemplateGroupContainer(
	):TemplateGroupContainer;

	/**
	 * Returns the container that collects all filters of templates that are booted by this specific provider.
	 */
	abstract public function getFilterContainer(
	):CatalogFilterBuilderContainer;

	/**
	 * Returns the container that collects all custom filters of templates that are booted by this specific provider.
	 */
	abstract public function getCustomFilterContainer(
	):CatalogFilterBuilderContainer;

}
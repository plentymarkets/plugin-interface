<?php
namespace Plenty\Modules\Catalog\Templates;

use Plenty\Modules\Catalog\Contracts\CatalogRuntimeConfigProviderContract;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateProviderContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;
use Plenty\Modules\Catalog\Services\Cache\Intervals\Intervals;
use Plenty\Modules\Catalog\Services\UI\Sections\Sections;

/**
 * The BaseTemplateProvider is the abstract class that should be used to implement a template provider.
 */
abstract class BaseTemplateProvider implements CatalogTemplateProviderContract

{

	abstract public function getMappings(
	):array;

	abstract public function getPreMutators(
	):array;

	abstract public function getPostMutators(
	):array;

	abstract public function getFilter(
	):array;

	abstract public function getSkuCallback(
	):callable;

	abstract public function getSettings(
	):array;

	abstract public function getMetaInfo(
	):array;

	abstract public function getCustomFilters(
	):array;

	abstract public function getAssignments(
	):array;

	abstract public function getHooks(
	);

	abstract public function getSections(
	):Sections;

	abstract public function getDevcacheIntervals(
	):Intervals;

}
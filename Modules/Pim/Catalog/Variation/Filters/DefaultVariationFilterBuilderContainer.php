<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters;

use Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer;
use Plenty\Modules\Catalog\Contracts\Filters\CatalogFilterBuilderContract;

/**
 * Default variation filter builder container. Contains all available filter builders.
 */
abstract class DefaultVariationFilterBuilderContainer extends \Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer 

{

	abstract public function removeFilterBuilder(
		 $key
	);

	abstract public function addFilterBuilder(
		CatalogFilterBuilderContract $filterBuilder
	);

	abstract public function getFilterBuilders(
	):array;

	abstract public function removeFilterBuilders(
		string $key
	);

	abstract public function removeAllFilterBuilders(
	);

}
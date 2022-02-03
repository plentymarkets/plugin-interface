<?php
namespace Plenty\Modules\Catalog\Services\Mutator;

use Plenty\Modules\Catalog\Contracts\CatalogMutatorContract;

/**
 * Mutator container
 */
abstract class MutatorContainer implements CatalogMutatorContract

{

	/**
	 * Register Mutators implementing CatalogMutatorContract
	 */
	abstract public function add(
		CatalogMutatorContract $mutator
	):MutatorContainer;

	/**
	 * Calls function mutator inside every mutator class in the order of registration
	 */
	abstract public function mutate(
		 $item
	);

}
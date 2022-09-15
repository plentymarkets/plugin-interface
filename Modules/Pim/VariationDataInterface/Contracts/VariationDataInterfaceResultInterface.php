<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Contracts;

use Plenty\Modules\Core\Data\Exceptions\LazyLoaderException;
use Plenty\Modules\Core\Data\Exceptions\ModelFlattenerException;
use Plenty\Modules\Pim\VariationDataInterface\Model\Variation;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;
use Traversable;

/**
 * The Result of the variation data interface
 */
interface VariationDataInterfaceResultInterface 
{

	/**
	 * Get the context which is uses for this result .
	 */
	public function getContext(
	):VariationDataInterfaceContext;

	/**
	 * Get the total found variations.
	 */
	public function total(
	):int;

	/**
	 * Get all found variations as Traversable.
	 */
	public function get(
	):array;

	/**
	 * Get additional data provided by the elasticsearch result
	 */
	public function getAdditionalData(
	):array;

}
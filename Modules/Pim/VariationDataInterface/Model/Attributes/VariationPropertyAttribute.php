<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Attributes;

use Exception;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;
use Plenty\Modules\Property\V2\Models\Property;

/**
 * The property part of the variation
 */
abstract class VariationPropertyAttribute 
{

	const PROPERTY = 'Plenty\Modules\Property\V2\Models\Property';

	const PRIMARY_KEY = 'variationId';

	/**
	 * Get the related key on the variation model.
	 */
	abstract public static function getVariationAttribute(
	):string;

	abstract public function getName(
	):string;

	abstract public function addLazyLoadParts(
		 $lazyLoadParts
	);

	abstract public function getLazyLoadParts(
	):array;

}
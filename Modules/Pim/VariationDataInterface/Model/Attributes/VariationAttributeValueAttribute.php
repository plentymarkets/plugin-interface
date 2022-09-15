<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Attributes;

use Exception;
use Plenty\Modules\Item\Attribute\Models\Attribute;
use Plenty\Modules\Item\Attribute\Models\AttributeValue;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;

/**
 * The attribute part of the variation
 */
abstract class VariationAttributeValueAttribute 
{

	const ATTRIBUTE = 'Plenty\Modules\Item\Attribute\Models\Attribute';

	const VALUE = 'Plenty\Modules\Item\Attribute\Models\AttributeValue';

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
<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Attributes;

use Plenty\Modules\Item\SalesPrice\Models\SalesPrice;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;
use Plenty\Modules\Tag\Models\Tag;

/**
 * The comment part of the variation
 */
abstract class VariationCommentAttribute 
{

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
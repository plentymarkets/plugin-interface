<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Attributes;

use Exception;
use Plenty\Legacy\Services\Item\Image\ImageService;
use Plenty\Modules\Core\Data\Services\LazyLoader;
use Plenty\Modules\Item\ItemImage\Models\ItemImage;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\Variation;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;

/**
 * The image part of the variation
 */
abstract class VariationImageAttribute 
{

	const IMAGE = 'Plenty\Modules\Item\ItemImage\Models\ItemImage';

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
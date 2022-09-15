<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Attributes;

use Exception;
use Plenty\Modules\Category\Models\Category;
use Plenty\Modules\Category\Models\CategoryBranch;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;

/**
 * The category part of the variation
 */
abstract class VariationCategoryAttribute 
{

	const CATEGORY = 'Plenty\Modules\Category\Models\Category';

	const CATEGORY_BRANCH = 'Plenty\Modules\Category\Models\CategoryBranch';

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
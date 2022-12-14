<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Category\With;

/**
 * Contains information about a category, belongs to a variation.
 */
abstract class Category 
{
	
	/**
	 * @var With
	 */
	public		$with;
	
	/**
	 * @var int
	 */
	public		$variationId;
	
	/**
	 * @var int
	 */
	public		$categoryId;
	
	/**
	 * @var int
	 */
	public		$position;
	
	/**
	 * @var string
	 */
	public		$isNeckermannPrimary;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
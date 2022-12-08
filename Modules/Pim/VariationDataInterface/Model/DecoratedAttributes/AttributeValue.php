<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\AttributeValue\With;

/**
 * Contains information about an attribute value, belongs to a variation.
 */
abstract class AttributeValue 
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
	public		$attributeId;
	
	/**
	 * @var int
	 */
	public		$attributeValueSetId;
	
	/**
	 * @var int
	 */
	public		$valueId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
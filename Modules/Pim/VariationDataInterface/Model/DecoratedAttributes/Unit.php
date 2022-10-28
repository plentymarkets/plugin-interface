<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Unit\With;

/**
 * contains informations about the unit of the variaiton
 */
abstract class Unit 
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
	public		$unitId;
	
	/**
	 * @var float
	 */
	public		$content;
	
	/**
	 * @var int
	 */
	public		$unitCombinationId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
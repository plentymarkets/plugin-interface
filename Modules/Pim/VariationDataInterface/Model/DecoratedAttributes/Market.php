<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * contains informations about an market, belongs to a variation
 */
abstract class Market 
{
	
	/**
	 * @var int
	 */
	public		$variationId;
	
	/**
	 * @var float
	 */
	public		$marketId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
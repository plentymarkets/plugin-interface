<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * Contains information about an market, belongs to a variation.
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
	 * @var string
	 */
	public		$createdAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * Contains information about an additonal sku, belongs to a variation.
 */
abstract class AdditionalSku 
{
	
	/**
	 * @var int
	 */
	public		$variationId;
	
	/**
	 * @var int
	 */
	public		$id;
	
	/**
	 * @var float
	 */
	public		$marketId;
	
	/**
	 * @var int
	 */
	public		$marketAccountId;
	
	/**
	 * @var string
	 */
	public		$sku;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
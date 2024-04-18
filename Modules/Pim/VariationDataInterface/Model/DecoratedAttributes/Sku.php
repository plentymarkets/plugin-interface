<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * Contains information about a sku, belongs to a variation.
 */
abstract class Sku 
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
	public		$accountId;
	
	/**
	 * @var string
	 */
	public		$initialSku;
	
	/**
	 * @var string
	 */
	public		$sku;
	
	/**
	 * @var string
	 */
	public		$parentSku;
	
	/**
	 * @var bool
	 */
	public		$isActive;
	
	/**
	 * @var string
	 */
	public		$exportedAt;
	
	/**
	 * @var string
	 */
	public		$stockUpdatedAt;
	
	/**
	 * @var string
	 */
	public		$deletedAt;
	
	/**
	 * @var string
	 */
	public		$status;
	
	/**
	 * @var string
	 */
	public		$additionalInformation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
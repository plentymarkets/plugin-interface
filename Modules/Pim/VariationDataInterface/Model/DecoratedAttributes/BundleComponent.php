<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;

/**
 * Contains information about a barcode, belongs to a variation.
 */
abstract class BundleComponent 
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
	 * @var int
	 */
	public		$componentVariationId;
	
	/**
	 * @var float
	 */
	public		$componentQuantity;
	
	/**
	 * @var Carbon
	 */
	public		$createdAt;
	
	/**
	 * @var Carbon
	 */
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
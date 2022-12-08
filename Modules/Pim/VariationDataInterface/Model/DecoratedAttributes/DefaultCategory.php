<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\DefaultCategory\With;

/**
 * Contains information about a default category, belongs to a variation.
 */
abstract class DefaultCategory 
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
	public		$branchId;
	
	/**
	 * @var int
	 */
	public		$plentyId;
	
	/**
	 * @var bool
	 */
	public		$manually;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
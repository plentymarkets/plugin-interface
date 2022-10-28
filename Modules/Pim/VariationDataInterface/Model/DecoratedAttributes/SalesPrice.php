<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\SalesPrice\With;

/**
 * contains informations about a client, belongs to a salesPrice
 */
abstract class SalesPrice 
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
	public		$salesPriceId;
	
	/**
	 * @var float
	 */
	public		$price;
	
	/**
	 * @var float
	 */
	public		$lowestPrice;
	
	/**
	 * @var bool
	 */
	public		$lowestPriceCalculation;
	
	/**
	 * @var Carbon
	 */
	public		$updatedAt;
	
	/**
	 * @var Carbon
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
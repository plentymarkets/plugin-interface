<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Supplier\With;

/**
 * contains informations about a supplier, belongs to a variation.
 */
abstract class Supplier 
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
	public		$id;
	
	/**
	 * @var int
	 */
	public		$supplierId;
	
	/**
	 * @var float
	 */
	public		$purchasePrice;
	
	/**
	 * @var int
	 */
	public		$minimumPurchase;
	
	/**
	 * @var string
	 */
	public		$itemNumber;
	
	/**
	 * @var string
	 */
	public		$lastPriceQuery;
	
	/**
	 * @var int
	 */
	public		$deliveryTimeInDays;
	
	/**
	 * @var float
	 */
	public		$discount;
	
	/**
	 * @var bool
	 */
	public		$isDiscountable;
	
	/**
	 * @var float
	 */
	public		$packagingUnit;
	
	/**
	 * @var float
	 */
	public		$currencyPurchasePrice;
	
	/**
	 * @var string
	 */
	public		$itemDescription;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
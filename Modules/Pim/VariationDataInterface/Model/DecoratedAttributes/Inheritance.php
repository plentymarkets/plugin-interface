<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * Contains the inheritance information of a variation.
 */
abstract class Inheritance 
{
	
	/**
	 * @var int
	 */
	public		$variationId;
	
	/**
	 * @var bool
	 */
	public		$categories;
	
	/**
	 * @var bool
	 */
	public		$referrer;
	
	/**
	 * @var bool
	 */
	public		$clients;
	
	/**
	 * @var bool
	 */
	public		$salesPrices;
	
	/**
	 * @var bool
	 */
	public		$supplier;
	
	/**
	 * @var bool
	 */
	public		$warehouses;
	
	/**
	 * @var bool
	 */
	public		$properties;
	
	/**
	 * @var bool
	 */
	public		$tags;
	
	/**
	 * @var bool
	 */
	public		$customs;
	
	/**
	 * @var bool
	 */
	public		$estimatedAvailableAt;
	
	/**
	 * @var bool
	 */
	public		$externalId;
	
	/**
	 * @var bool
	 */
	public		$position;
	
	/**
	 * @var bool
	 */
	public		$extraShippingCharge1;
	
	/**
	 * @var bool
	 */
	public		$extraShippingCharge2;
	
	/**
	 * @var bool
	 */
	public		$intervalOrderQuantity;
	
	/**
	 * @var bool
	 */
	public		$maximumOrderQuantity;
	
	/**
	 * @var bool
	 */
	public		$minimumOrderQuantity;
	
	/**
	 * @var bool
	 */
	public		$model;
	
	/**
	 * @var bool
	 */
	public		$packingUnits;
	
	/**
	 * @var bool
	 */
	public		$picking;
	
	/**
	 * @var bool
	 */
	public		$purchasePrice;
	
	/**
	 * @var bool
	 */
	public		$storageCosts;
	
	/**
	 * @var bool
	 */
	public		$transportationCosts;
	
	/**
	 * @var bool
	 */
	public		$unitCombinationId;
	
	/**
	 * @var bool
	 */
	public		$unitsContained;
	
	/**
	 * @var bool
	 */
	public		$vatId;
	
	/**
	 * @var bool
	 */
	public		$weightG;
	
	/**
	 * @var bool
	 */
	public		$weightNetG;
	
	/**
	 * @var bool
	 */
	public		$availability;
	
	/**
	 * @var bool
	 */
	public		$stockLimitation;
	
	/**
	 * @var bool
	 */
	public		$isVisibleIfNetStockIsPositive;
	
	/**
	 * @var bool
	 */
	public		$isInvisibleIfNetStockIsNotPositive;
	
	/**
	 * @var bool
	 */
	public		$isAvailableIfNetStockIsPositive;
	
	/**
	 * @var bool
	 */
	public		$isUnavailableIfNetStockIsNotPositive;
	
	/**
	 * @var bool
	 */
	public		$isVisibleInListIfNetStockIsPositive;
	
	/**
	 * @var bool
	 */
	public		$isInvisibleInListIfNetStockIsNotPositive;
	
	/**
	 * @var bool
	 */
	public		$mainWarehouseId;
	
	/**
	 * @var bool
	 */
	public		$releasedAt;
	
	/**
	 * @var bool
	 */
	public		$name;
	
	/**
	 * @var bool
	 */
	public		$widthMM;
	
	/**
	 * @var bool
	 */
	public		$lengthMM;
	
	/**
	 * @var bool
	 */
	public		$heightMM;
	
	/**
	 * @var bool
	 */
	public		$palletTypeId;
	
	/**
	 * @var bool
	 */
	public		$packingUnitTypeId;
	
	/**
	 * @var bool
	 */
	public		$operatingCosts;
	
	/**
	 * @var bool
	 */
	public		$isHiddenInCategoryList;
	
	/**
	 * @var bool
	 */
	public		$availableUntil;
	
	/**
	 * @var bool
	 */
	public		$mayShowUnitPrice;
	
	/**
	 * @var bool
	 */
	public		$customsTariffNumber;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Base\With;

/**
 * Contains the basic information of a variation.
 */
abstract class Base 
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
	 * @var bool
	 */
	public		$isMain;
	
	/**
	 * @var int
	 */
	public		$mainVariationId;
	
	/**
	 * @var int
	 */
	public		$itemId;
	
	/**
	 * @var int
	 */
	public		$position;
	
	/**
	 * @var bool
	 */
	public		$isActive;
	
	/**
	 * @var string
	 */
	public		$number;
	
	/**
	 * @var string
	 */
	public		$model;
	
	/**
	 * @var string
	 */
	public		$externalId;
	
	/**
	 * @var int
	 */
	public		$availability;
	
	/**
	 * @var int
	 */
	public		$availabilityId;
	
	/**
	 * @var string
	 */
	public		$estimatedAvailableAt;
	
	/**
	 * @var float
	 */
	public		$purchasePrice;
	
	/**
	 * @var float
	 */
	public		$movingAveragePrice;
	
	/**
	 * @var int
	 */
	public		$priceCalculationId;
	
	/**
	 * @var string
	 */
	public		$priceCalculationUUID;
	
	/**
	 * @var string
	 */
	public		$picking;
	
	/**
	 * @var int
	 */
	public		$stockLimitation;
	
	/**
	 * @var string
	 */
	public		$isVisibleIfNetStockIsPositive;
	
	/**
	 * @var string
	 */
	public		$isInvisibleIfNetStockIsNotPositive;
	
	/**
	 * @var string
	 */
	public		$isAvailableIfNetStockIsPositive;
	
	/**
	 * @var string
	 */
	public		$isUnavailableIfNetStockIsNotPositive;
	
	/**
	 * @var string
	 */
	public		$isVisibleInListIfNetStockIsPositive;
	
	/**
	 * @var string
	 */
	public		$isInvisibleInListIfNetStockIsNotPositive;
	
	/**
	 * @var int
	 */
	public		$mainWarehouseId;
	
	/**
	 * @var float
	 */
	public		$maximumOrderQuantity;
	
	/**
	 * @var float
	 */
	public		$minimumOrderQuantity;
	
	/**
	 * @var float
	 */
	public		$intervalOrderQuantity;
	
	/**
	 * @var string
	 */
	public		$availableUntil;
	
	/**
	 * @var string
	 */
	public		$releasedAt;
	
	/**
	 * @var string
	 */
	public		$name;
	
	/**
	 * @var int
	 */
	public		$weightG;
	
	/**
	 * @var int
	 */
	public		$weightNetG;
	
	/**
	 * @var int
	 */
	public		$widthMM;
	
	/**
	 * @var int
	 */
	public		$lengthMM;
	
	/**
	 * @var int
	 */
	public		$heightMM;
	
	/**
	 * @var float
	 */
	public		$extraShippingCharge1;
	
	/**
	 * @var float
	 */
	public		$extraShippingCharge2;
	
	/**
	 * @var int
	 */
	public		$unitsContained;
	
	/**
	 * @var int
	 */
	public		$palletTypeId;
	
	/**
	 * @var int
	 */
	public		$packingUnits;
	
	/**
	 * @var int
	 */
	public		$packingUnitsTypeId;
	
	/**
	 * @var float
	 */
	public		$transportationCosts;
	
	/**
	 * @var float
	 */
	public		$storageCosts;
	
	/**
	 * @var float
	 */
	public		$customs;
	
	/**
	 * @var float
	 */
	public		$operatingCosts;
	
	/**
	 * @var int
	 */
	public		$vatId;
	
	/**
	 * @var string
	 */
	public		$bundleType;
	
	/**
	 * @var int
	 */
	public		$automaticClientVisibility;
	
	/**
	 * @var int
	 */
	public		$automaticListVisibility;
	
	/**
	 * @var string
	 */
	public		$isHiddenInCategoryList;
	
	/**
	 * @var float
	 */
	public		$defaultShippingCosts;
	
	/**
	 * @var string
	 */
	public		$mayShowUnitPrice;
	
	/**
	 * @var int
	 */
	public		$parentVariationId;
	
	/**
	 * @var float
	 */
	public		$parentVariationQuantity;
	
	/**
	 * @var int
	 */
	public		$singleItemCount;
	
	/**
	 * @var string
	 */
	public		$hasCalculatedBundleWeight;
	
	/**
	 * @var string
	 */
	public		$hasCalculatedBundleNetWeight;
	
	/**
	 * @var string
	 */
	public		$hasCalculatedBundlePurchasePrice;
	
	/**
	 * @var string
	 */
	public		$hasCalculatedBundleMovingAveragePrice;
	
	/**
	 * @var string
	 */
	public		$customsTariffNumber;
	
	/**
	 * @var int
	 */
	public		$campaignId;
	
	/**
	 * @var Carbon
	 */
	public		$createdAt;
	
	/**
	 * @var Carbon
	 */
	public		$updatedAt;
	
	/**
	 * @var Carbon
	 */
	public		$relatedUpdatedAt;
	
	/**
	 * @var Carbon
	 */
	public		$availabilityUpdatedAt;
	
	/**
	 * @var bool
	 */
	public		$categoriesInherited;
	
	/**
	 * @var bool
	 */
	public		$referrerInherited;
	
	/**
	 * @var bool
	 */
	public		$clientsInherited;
	
	/**
	 * @var bool
	 */
	public		$salesPricesInherited;
	
	/**
	 * @var bool
	 */
	public		$supplierInherited;
	
	/**
	 * @var bool
	 */
	public		$warehousesInherited;
	
	/**
	 * @var bool
	 */
	public		$propertiesInherited;
	
	/**
	 * @var bool
	 */
	public		$tagsInherited;
	
	/**
	 * @var string
	 */
	public		$itemType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
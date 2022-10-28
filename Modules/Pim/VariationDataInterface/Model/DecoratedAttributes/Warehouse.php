<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Warehouse\With;

/**
 * contains informations about a warehouse, belongs to a variation
 */
abstract class Warehouse 
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
	public		$warehouseId;
	
	/**
	 * @var int
	 */
	public		$warehouseZoneId;
	
	/**
	 * @var string
	 */
	public		$storageLocationType;
	
	/**
	 * @var int
	 */
	public		$reorderLevel;
	
	/**
	 * @var int
	 */
	public		$maximumStock;
	
	/**
	 * @var int
	 */
	public		$stockTurnoverInDays;
	
	/**
	 * @var int
	 */
	public		$storageLocation;
	
	/**
	 * @var int
	 */
	public		$stockBuffer;
	
	/**
	 * @var bool
	 */
	public		$isBatch;
	
	/**
	 * @var bool
	 */
	public		$isBestBeforeDate;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
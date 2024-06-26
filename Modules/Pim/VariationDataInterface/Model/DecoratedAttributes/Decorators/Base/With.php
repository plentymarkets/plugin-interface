<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Base;

use Plenty\Modules\ItemSet\Models\ItemSetConfig;
use Plenty\Modules\Item\Availability\Models\Availability;
use Plenty\Modules\Item\Item\Models\Item;

/**
 * contains lazy loaded base data
 */
abstract class With 
{
	
	/**
	 * @var Item
	 */
	public		$item;
	
	/**
	 * @var array
	 */
	public		$characteristics;
	
	/**
	 * @var array
	 */
	public		$crossSelling;
	
	/**
	 * @var array
	 */
	public		$crossSellingFor;
	
	/**
	 * @var array
	 */
	public		$texts;
	
	/**
	 * @var array
	 */
	public		$feedback;
	
	/**
	 * @var Availability
	 */
	public		$availability;
	
	/**
	 * @var array
	 */
	public		$shippingProfiles;
	
	/**
	 * @var array
	 */
	public		$images;
	
	/**
	 * @var array
	 */
	public		$stock;
	
	/**
	 * @var array
	 */
	public		$stockStorageLocations;
	
	/**
	 * @var array
	 */
	public		$serialNumbers;
	
	/**
	 * @var ItemSetConfig
	 */
	public		$setConfig;
	
	/**
	 * @var array
	 */
	public		$itemEbayTitle;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
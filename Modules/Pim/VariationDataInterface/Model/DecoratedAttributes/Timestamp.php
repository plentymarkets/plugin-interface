<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;

/**
 * Contains informations the timestamps of a variation.
 */
abstract class Timestamp 
{
	
	/**
	 * @var Carbon
	 */
	public		$availability;
	
	/**
	 * @var Carbon
	 */
	public		$additionalSku;
	
	/**
	 * @var Carbon
	 */
	public		$barcode;
	
	/**
	 * @var Carbon
	 */
	public		$base;
	
	/**
	 * @var Carbon
	 */
	public		$bundleComponent;
	
	/**
	 * @var Carbon
	 */
	public		$category;
	
	/**
	 * @var Carbon
	 */
	public		$client;
	
	/**
	 * @var Carbon
	 */
	public		$defaultCategory;
	
	/**
	 * @var Carbon
	 */
	public		$image;
	
	/**
	 * @var Carbon
	 */
	public		$market;
	
	/**
	 * @var Carbon
	 */
	public		$marketIdentNumber;
	
	/**
	 * @var Carbon
	 */
	public		$related;
	
	/**
	 * @var Carbon
	 */
	public		$salesPrice;
	
	/**
	 * @var Carbon
	 */
	public		$sku;
	
	/**
	 * @var Carbon
	 */
	public		$supplier;
	
	/**
	 * @var Carbon
	 */
	public		$warehouse;
	
	/**
	 * @var Carbon
	 */
	public		$property;
	
	/**
	 * @var Carbon
	 */
	public		$comment;
	
	/**
	 * @var Carbon
	 */
	public		$tag;
	
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
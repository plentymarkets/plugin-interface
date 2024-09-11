<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Barcode\With;

/**
 * Contains information about a barcode, belongs to a variation.
 */
abstract class Barcode 
{
	
	/**
	 * @var With
	 */
	public		$with;
	
	/**
	 * @var string
	 */
	public		$code;
	
	/**
	 * @var int
	 */
	public		$barcodeId;
	
	/**
	 * @var int
	 */
	public		$variationId;
	
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
<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Barcode\With;

/**
 * contains informations about a barcode, belongs to a variation
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
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
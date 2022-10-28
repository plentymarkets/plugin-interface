<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;


/**
 * contains informations about an market ident number, belongs to a variation
 */
abstract class MarketIdentNumber 
{

	const TYPE_ASIN = 'ASIN';

	const TYPE_EPID = 'EPID';

	const TYPE_UPC = 'UPC';

	const TYPE_RSIN = 'RSIN';

	const TYPE_MOIN = 'MOIN';
	
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
	public		$countryId;
	
	/**
	 * @var string
	 */
	public		$type;
	
	/**
	 * @var int
	 */
	public		$position;
	
	/**
	 * @var string
	 */
	public		$value;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
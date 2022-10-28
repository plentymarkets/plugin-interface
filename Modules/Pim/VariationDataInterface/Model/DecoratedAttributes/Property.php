<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Property\With;

/**
 * contains informations about a property, belongs to a variation
 */
abstract class Property 
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
	public		$propertyId;
	
	/**
	 * @var int
	 */
	public		$groupId;
	
	/**
	 * @var float
	 */
	public		$markup;
	
	/**
	 * @var string
	 */
	public		$value;
	
	/**
	 * @var string
	 */
	public		$rawValue;
	
	/**
	 * @var array
	 */
	public		$values;
	
	/**
	 * @var array
	 */
	public		$selectionValues;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Property\With;

/**
 * Contains information about a property, belongs to a variation.
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
	 * @var Carbon
	 */
	public		$createdAt;
	
	/**
	 * @var Carbon
	 */
	public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
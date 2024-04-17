<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;
use Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes\Decorators\Tag\With;

/**
 * Contains information about a tag, belongs to a variation.
 */
abstract class Tag 
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
	public		$tagId;
	
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
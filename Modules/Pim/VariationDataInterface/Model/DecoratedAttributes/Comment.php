<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\DecoratedAttributes;

use Carbon\Carbon;

/**
 * contains informations about a comment, belongs to a variation
 */
abstract class Comment 
{
	
	/**
	 * @var int
	 */
	public		$id;
	
	/**
	 * @var int
	 */
	public		$userId;
	
	/**
	 * @var string
	 */
	public		$text;
	
	/**
	 * @var bool
	 */
	public		$isVisibleForContact;
	
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
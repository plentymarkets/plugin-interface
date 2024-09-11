<?php
namespace Plenty\Modules\Pim\DocumentService\Models\Variation;

use Carbon\Carbon;

/**
 * The Property values of the variation
 */
abstract class PropertyValue 
{
	
	/**
	 * @var int
	 */
	public		$id;
	
	/**
	 * @var string
	 */
	public		$lang;
	
	/**
	 * @var string
	 */
	public		$value;
	
	/**
	 * @var string
	 */
	public		$description;
	
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
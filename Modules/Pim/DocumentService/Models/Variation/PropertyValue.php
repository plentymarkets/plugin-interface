<?php
namespace Plenty\Modules\Pim\DocumentService\Models\Variation;


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
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
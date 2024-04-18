<?php
namespace Plenty\Modules\Pim\DocumentService\Models\Variation;


/**
 * The Property selection values of the variation
 */
abstract class PropertySelectionValue 
{
	
	/**
	 * @var int
	 */
	public		$id;
	
	/**
	 * @var int
	 */
	public		$selectionId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
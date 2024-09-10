<?php
namespace Plenty\Modules\Pim\DocumentService\Models\Variation;

use Carbon\Carbon;

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
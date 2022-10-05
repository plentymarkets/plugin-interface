<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Operations;

use Plenty\Modules\Pim\DocumentService\Models\WriteResponse;

/**
 * The delete operation for the vdi.
 */
abstract class DeleteOperation 
{

	abstract public function add(
		 $variations
	):self;

	abstract public function save(
	):WriteResponse;

}
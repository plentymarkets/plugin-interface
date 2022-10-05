<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Operations;

use Plenty\Modules\Pim\DocumentService\Models\WriteResponse;

/**
 * The replace operation for the vdi.
 */
abstract class ReplaceOperation 
{

	abstract public function add(
		 $variations
	):self;

	abstract public function save(
	):WriteResponse;

}
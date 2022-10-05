<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Operations;

use DB;
use Plenty\Modules\Pim\DocumentService\Models\Variation;
use Plenty\Modules\Pim\DocumentService\Models\Variation\Base;
use Plenty\Modules\Pim\DocumentService\Models\WriteResponse;
use stdClass;

/**
 * The create or update operation for the vdi.
 */
abstract class CreateOrUpdateOperation 
{

	abstract public function add(
		 $variations
	):self;

	abstract public function save(
	):WriteResponse;

}
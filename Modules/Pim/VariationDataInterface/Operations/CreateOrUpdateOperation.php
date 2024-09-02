<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Operations;

use DB;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Pim\DocumentService\Models\Variation;
use Plenty\Modules\Pim\DocumentService\Models\Variation\Base;
use Plenty\Modules\Pim\DocumentService\Models\WriteResponse;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\OperationInterface;
use stdClass;

/**
 * The create or update operation for the vdi.
 */
abstract class CreateOrUpdateOperation 
{

	/**
	 * Updated variations will be direct refreshed in the elasticsearch index. !!! ONLY USE IN AGREEMENT WITH PIM TEAM !!!
	 */
	abstract public function setDirectRefresh(
		bool $directRefresh
	):self;

	abstract public function add(
		 $variations
	):self;

	abstract public function save(
	):WriteResponse;

}
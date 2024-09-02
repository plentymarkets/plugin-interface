<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Operations;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Pim\DocumentService\Models\WriteResponse;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\OperationInterface;

/**
 * The replace operation for the vdi.
 */
abstract class ReplaceOperation 
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
<?php
namespace Plenty\Modules\Pim\DocumentService\Models;


/**
 * The writeable attribute interface for the vdi models
 */
interface WriteableAttribute 
{

	public function getVariationId(
	);

	/**
	 * Set the variation ID of the part
	 */
	public function setVariationId(
		int $variationId
	):self;

	public function getKey(
	):string;

	public function getValidator(
		string $operation
	):string;

}
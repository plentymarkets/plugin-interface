<?php
namespace Plenty\Modules\Pim\Contracts\GTIN;

use Plenty\Modules\Pim\Models\GTIN\GtinConfig;

/**
 * The contract for the gtin repository
 */
interface GTINRepositoryContract 
{

	/**
	 * Gets GTIN 13 barcodes from plenty_text
	 */
	public function get(
		bool $next = false
	):GtinConfig;

}
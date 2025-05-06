<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Modules\Webshop\Contracts\LocalizationRepositoryContract;
use Plenty\Modules\Webshop\Template\Contracts\TemplateConfigRepositoryContract;

/**
 * Helper class for number formatting
 */
abstract class NumberFormatter 
{

	/**
	 * Format the given value to decimal
	 */
	abstract public function formatDecimal(
		float $value, 
		int $decimal_places = -1
	):string;

	/**
	 * Format the given value to currency
	 */
	abstract public function formatMonetary(
		 $value, 
		 $currencyISO
	):string;

	/**
	 * Get formatter
Get formatter by given currency iso
	 */
	abstract public function getFormatter(
		string $currencyISO
	);

}
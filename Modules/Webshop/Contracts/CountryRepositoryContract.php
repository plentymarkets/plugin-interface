<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * Repository to get and set country information for the webshop
 */
interface CountryRepositoryContract 
{

	public function getEUCountriesList(
		string $lang
	):array;

	public function getActiveCountriesList(
		string $lang
	):array;

	public function getCombinedList(
		string $language
	):array;

}
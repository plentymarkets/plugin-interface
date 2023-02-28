<?php
namespace Plenty\Modules\Order\Shipping\Countries\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;
use Plenty\Modules\Order\Shipping\Countries\Models\CountryState;

/**
 * Repository for Country
 */
interface CountryRepositoryContract 
{

	/**
	 * Finds the ISO-Code
	 */
	public function findIsoCode(
		int $countryId, 
		string $isoCodeType
	):string;

	/**
	 * Gets a country
	 */
	public function getCountryById(
		int $countryId
	):Country;

	/**
	 * Get countries
	 */
	public function getCountriesList(
		int $active, 
		array $with, 
		int $onlyEUCountries = null
	):Collection;

	/**
	 * Get active countries
	 */
	public function getActiveCountriesList(
	):Collection;

	/**
	 * Get names of countries
	 */
	public function getActiveCountryNameMap(
		string $language
	):array;

	/**
	 * Gets a country.
	 */
	public function getCountryByIso(
		string $isoCode, 
		string $isoType
	);

	/**
	 * Gets a country state
	 */
	public function getCountryStateByIso(
		int $countryId, 
		string $isoCode
	):CountryState;

	/**
	 * Activates a country
	 */
	public function activateCountry(
		int $countryId
	):Country;

	/**
	 * Deactivates a country
	 */
	public function deactivateCountry(
		int $countryId
	):Country;

}
<?php
namespace Plenty\Modules\Order\Shipping\Countries\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;
use Plenty\Modules\Order\Shipping\Countries\Models\CountryState;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

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

	public function shouldKeepEUCountry(
		 $country
	);

	/**
	 * Update countries
	 */
	public function updateCountries(
		array $data
	):Collection;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

}
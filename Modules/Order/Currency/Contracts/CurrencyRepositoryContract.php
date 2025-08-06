<?php
namespace Plenty\Modules\Order\Currency\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Order\Currency\Models\Currency;
use Plenty\Modules\Order\Currency\Models\CurrencyExchangeRate;
use Plenty\Modules\Order\Currency\Models\LiveExchangeRatesResult;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;

/**
 * Provides methods for currency data.
 */
interface CurrencyRepositoryContract 
{

	/**
	 * Get a currency
	 */
	public function getCurrency(
		string $currencyIso, 
		array $columns = [], 
		array $with = []
	):Currency;

	/**
	 * Get all currencies supported in the system.
	 */
	public function getCurrencyList(
		array $columns = [], 
		array $with = []
	);

	/**
	 * List countries for a currency
	 */
	public function getCurrencyCountries(
		string $currencyIso, 
		array $columns = []
	);

	/**
	 * Get a currency for a country
	 */
	public function getCountryCurrency(
		int $countryId, 
		array $columns = [], 
		array $with = []
	):Currency;

	/**
	 * Get the exchange rate for a currency
	 */
	public function getExchangeRate(
		string $currencyIso
	):CurrencyExchangeRate;

	/**
	 * List exchange rates from a currency
	 */
	public function getExchangeRatesFrom(
		string $currencyIso
	):array;

	/**
	 * List exchange rates to a currency
	 */
	public function getExchangeRatesTo(
		string $currencyIso
	):array;

	/**
	 * Get the live exchange rates
	 */
	public function getLiveExchangeRates(
	):LiveExchangeRatesResult;

}
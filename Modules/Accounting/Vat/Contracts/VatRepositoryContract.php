<?php
namespace Plenty\Modules\Accounting\Vat\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Accounting\Vat\Exceptions\VatException;
use Plenty\Modules\Accounting\Vat\Models\Vat;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Contracts\SortableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The VatRepositoryContract is the interface for the VAT functionality. This interface allows you to get the VAT configuration for an accounting location and a country of delivery.
 */
interface VatRepositoryContract 
{

	const FILTER_LOCATION_ID = 'locationId';

	const FILTER_COUNTRY_ID = 'countryId';

	const FILTER_TAX_ID_NUMBER = 'taxIdNumber';

	const FILTER_STARTED_AT = 'startedAt';

	const FILTER_STARTED_AT_FROM = 'startedAtFrom';

	const FILTER_STARTED_AT_TO = 'startedAtTo';

	const FILTER_IS_ACTIVE = 'isActive';

	const FILTER_IS_RESTRICTED_TO_DIGITAL_ITEMS = 'isRestrictedToDigitalItems';

	/**
	 * Get a VAT configuration
	 */
	public function findById(
		int $id
	):Vat;

	/**
	 * Get the standard VAT configuration for a plenty ID
	 */
	public function getStandardVat(
		int $plentyId = null, 
		string $startedAt = null
	):Vat;

	/**
	 * Get the standard VAT configuration for a location ID
	 */
	public function getStandardVatByLocation(
		int $locationId, 
		string $startedAt = null
	):Vat;

	/**
	 * Gets the VAT configuration
	 */
	public function getVat(
		int $locationId, 
		int $countryId, 
		string $startedAt = null
	):Vat;

	/**
	 * List VAT configurations
	 */
	public function findVat(
		int $page = 1, 
		int $itemsPerPage = \Plenty\Modules\Accounting\Vat\Models\Vat::ITEMS_PER_PAGE, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * List VAT configurations for an accounting location
	 */
	public function findVatByLocationId(
		int $locationId, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * List VAT configuration for a country of delivery
	 */
	public function findVatByLocationIdAndCountry(
		int $locationId, 
		int $countryId, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * List VAT configuration for a date
	 */
	public function findVatByLocationIdAndDate(
		int $locationId, 
		string $date, 
		array $relations = [], 
		array $columns = []
	):array;

	/**
	 * Get a VAT configuration by id
	 */
	public function getVatById(
		int $id
	):Vat;

	/**
	 * Create a VAT configuration
	 */
	public function createVat(
		array $data
	):Vat;

	/**
	 * Update a VAT configuration
	 */
	public function updateVat(
		int $id, 
		array $data
	):Vat;

	/**
	 * Delete a VAT configuration
	 */
	public function deleteVat(
		int $id
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

}
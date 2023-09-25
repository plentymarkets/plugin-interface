<?php
namespace Plenty\Modules\Accounting\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Accounting\Models\RevenueAccountCountryConfiguration;
use Plenty\Modules\Accounting\Models\RevenueAccountLocationConfiguration;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The RevenueAccountRepositoryContract is the interface for the RevenueAccountRepository. This interface allows you to either list revenue accounts by locationId, find by locationId and countryId or to least all for an accounting location.
 */
interface RevenueAccountRepositoryContract 
{

	/**
	 * List revenue account configurations for all accounting locations. Each accounting location has one revenue account configuration.
	 */
	public function listRevenueAccounts(
		int $page = 1, 
		int $itemsPerPage = 50
	):PaginatedResult;

	/**
	 * Get the revenue account configuration of an accounting location. The ID of the accounting location must be specified.
	 */
	public function findByLocationId(
		int $locationId
	):RevenueAccountLocationConfiguration;

	/**
	 * Get the revenue account configuration of a country. The country account configuration is associated with an accounting location. The ID of the accounting location that the country is associated with as well as the ID of the country must be specified.
	 */
	public function findByLocationIdAndCountryId(
		int $locationId, 
		int $countryId
	):RevenueAccountCountryConfiguration;

	/**
	 * Updates the revenue account configuration of an accounting location. The ID of the accounting location has to be specified.
	 */
	public function update(
		int $locationId, 
		array $data
	):RevenueAccountLocationConfiguration;

}
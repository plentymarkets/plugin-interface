<?php
namespace Plenty\Modules\Account\Contact\Search7\Contracts;

use Plenty\Repositories\Models\FilteredPaginatedResult;

/**
 * Contract for search contacts
 */
interface ContactElasticSearchSearchRepositoryContract 
{

	/**
	 * Search contacts with the given filters.
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $filters = [], 
		string $sortBy = "contactId", 
		string $sortOrder = "desc", 
		string $with = ""
	):FilteredPaginatedResult;

	/**
	 * Search contacts with the given filters.
	 */
	public function searchAfter(
		int $itemsPerPage = 50, 
		array $filters = [], 
		string $sortBy = "id", 
		string $sortOrder = "desc", 
		string $with = "", 
		array $searchAfterKey = [], 
		bool $withResult = true
	):array;

}
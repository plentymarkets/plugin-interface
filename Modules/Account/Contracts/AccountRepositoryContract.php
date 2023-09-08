<?php
namespace Plenty\Modules\Account\Contracts;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Account\Models\Account;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The AccountRepositoryContract is the interface for the account repository. This interface allows to list, get, create, update and delete accounts. An account contains company-related data. It is also possible to list all contacts of an account.
 */
interface AccountRepositoryContract 
{

	/**
	 * Creates a new company and returns it. An account is equivalent to a company.
	 */
	public function createAccount(
		array $data
	):Account;

	/**
	 * Updates an existing company and returns it. The ID of the company must be specified. An account is equivalent to a company.
	 */
	public function updateAccount(
		array $data, 
		int $accountId
	):Account;

	/**
	 * Deletes a company. The ID of the company must be specified. Returns `true` if deletion was successful. Returns `false` if deletion was not successful. An account is equivalent to a company.
	 */
	public function deleteAccount(
		int $accountId
	):bool;

	/**
	 * Gets a company. The ID of the company must be specified. An account is equivalent to a company.
	 */
	public function findAccountById(
		int $accountId
	):Account;

    /**
     * Gets multiple accounts. The IDs of the accounts must be specified.
     *
     * @param array $accountIds
     *
     * @return Collection|array|null
     *
     * @throws Exception
     */
    public function findAccountsByIds(array $accountIds):Collection|array|null;

	/**
	 * Returns a collection of all companies. An account is equivalent to a company.
     *
	 */
	public function allAccounts(
		array $columns = [], 
		int $perPage = 50
	):Collection;

	/**
	 * Returns a collection of all companies. An account is equivalent to a company.
	 */
	public function allAccountsPaginated(
		array $columns = [], 
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		string $sortBy = "id", 
		string $sortOrder = "desc"
	):PaginatedResult;

	/**
	 * Returns a collection of contacts that belong to the company. An account is equivalent to a company.
	 */
	public function getContactsOfAccount(
		int $accountId
	):Collection;

	/**
	 * Returns a collection of contacts that belong to the company. An account is equivalent to a company.
	 */
	public function getContactsOfAccountPaginated(
		int $accountId, 
		int $page = 1, 
		int $itemsPerPage = 25, 
		string $sortBy = "id", 
		string $sortOrder = "asc"
	):Collection;

	/**
	 * Creates a new or updates an existing company. An account is equivalent to a company.
	 */
	public function saveAccount(
		array $data = []
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
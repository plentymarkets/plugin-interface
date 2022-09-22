<?php
namespace Plenty\Modules\Pim\Contracts\Barcode;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Collection;
use Plenty\Modules\Item\Barcode\Models\Barcode;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the pim barcode repository
 */
interface BarcodeRepositoryContract 
{

	/**
	 * Searches for barcodes
	 */
	public function search(
		array $with = [], 
		int $page = 1, 
		int $perPage = 50
	):Collection;

	/**
	 * Updates a list of barcodes
	 */
	public function update(
		array $data
	):Collection;

	/**
	 * Creates a list of barcodes
	 */
	public function create(
		array $data
	):Collection;

	/**
	 * Deletes a list of barcodes
	 */
	public function delete(
		array $data
	):Collection;

	/**
	 * Get one attribute by ID
	 */
	public function getById(
		int $id, 
		array $with = []
	):Barcode;

	/**
	 * Gets the total count of barcodes
	 */
	public function getCount(
	):int;

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
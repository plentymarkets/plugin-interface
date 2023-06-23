<?php
namespace Plenty\Modules\Marking\Contracts;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Marking\Models\Marking;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * Markings lookup repository
 */
interface MarkingRepositoryContract 
{

	/**
	 * Gets a marking by given ID
	 */
	public function get(
		int $id
	):Marking;

	/**
	 * Search markings by given criteria
	 */
	public function search(
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
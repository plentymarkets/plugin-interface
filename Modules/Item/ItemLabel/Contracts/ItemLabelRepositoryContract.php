<?php
namespace Plenty\Modules\Item\ItemLabel\Contracts;

use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The contract for the item label repository
 */
interface ItemLabelRepositoryContract 
{

	/**
	 * Get a variation label
	 */
	public function generateLabel(
		array $data
	):string;

	/**
	 * Get a item label
	 */
	public function generateItemLabel(
		array $data
	):string;

	/**
	 * List item label templates
	 */
	public function listTemplates(
	):array;

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
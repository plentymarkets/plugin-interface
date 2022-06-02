<?php
namespace Plenty\Modules\Tag\V2\Contracts;

use Exception;
use Plenty\Modules\Tag\V2\Models\TagRelationship;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The interface for the V2 TagRelationshipRepository.
 */
interface TagRelationshipRepositoryContract 
{

	/**
	 * Gets a list of tag relationships. Filter can be specified.
	 */
	public function search(
		array $with = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $sorting = []
	);

	/**
	 * Count the tag relationships
	 */
	public function count(
	):int;

	/**
	 * Creates a new tag relationship.
	 */
	public function create(
		array $data
	):TagRelationship;

	/**
	 * Deletes a tag relationship. The ID of the relationship must be specified.
	 */
	public function delete(
		int $id
	):bool;

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
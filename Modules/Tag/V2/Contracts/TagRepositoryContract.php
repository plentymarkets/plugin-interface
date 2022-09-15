<?php
namespace Plenty\Modules\Tag\V2\Contracts;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Plenty\Modules\Tag\V2\Models\Tag;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * The interface for the V2 TagRepository.
 */
interface TagRepositoryContract 
{

	/**
	 * Gets a list of tags. Filter can be specified.
	 */
	public function search(
		array $with = [], 
		int $perPage = 50, 
		int $page = 1, 
		array $sorting = [], 
		string $lang = null
	):array;

	/**
	 * Count the tags.
	 */
	public function count(
	):int;

	/**
	 * Creates a tag.
	 */
	public function create(
		array $data
	):Tag;

	/**
	 * Updates a tag. The ID of the tag must be specified.
	 */
	public function update(
		array $data, 
		int $tagId
	):Tag;

	/**
	 * Deletes a tag. The ID of the tag must specified.
	 */
	public function delete(
		int $tagId
	):bool;

	/**
	 * Gets a tag. The ID of the tag must be specified.
	 */
	public function getById(
		int $tagId, 
		array $with = []
	):Tag;

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
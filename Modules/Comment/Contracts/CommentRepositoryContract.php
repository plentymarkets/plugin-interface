<?php
namespace Plenty\Modules\Comment\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Comment\Models\Comment;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;

/**
 * Get, create, update and delete comments.
 */
interface CommentRepositoryContract 
{

	/**
	 * Get a comment
	 */
	public function getComment(
		int $commentId
	):Comment;

	/**
	 * List comments
	 */
	public function listComments(
		 $with = []
	):Collection;

	/**
	 * Create a comment
	 */
	public function createComment(
		array $data, 
		bool $suppressEvent = false
	):Comment;

	/**
	 * Delete a comment
	 */
	public function deleteComment(
		int $commentId
	);

	/**
	 * Update a comment
	 */
	public function updateComment(
		array $data, 
		int $commentId
	):Comment;

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
<?php
namespace Plenty\Modules\Messenger\Conversations\Contracts;

use Plenty\Modules\Account\Exceptions\CRMCritical;
use Plenty\Modules\Messenger\Conversations\Models\ConversationCategory;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ConversationCategoryRepositoryContract is the interface for the messenger conversations categories. This interface defines methods to add, update and show categories.
 */
interface ConversationCategoryRepositoryContract 
{

	/**
	 * Retrieves a category based on ID
	 */
	public function getCategory(
		int $id
	):ConversationCategory;

	/**
	 * Creates a new category
	 */
	public function createCategory(
		array $categoryData
	):ConversationCategory;

	/**
	 * Updates an existing category
	 */
	public function updateCategory(
		int $id, 
		array $data
	):ConversationCategory;

	public function updateCategoryStatus(
		int $id, 
		bool $isEnabled
	):ConversationCategory;

	/**
	 * Lists all categories based on provided filters
	 */
	public function listCategories(
		int $page, 
		int $itemsPerPage, 
		string $sortBy, 
		string $sortOrder, 
		array $filters = []
	):PaginatedResult;

	/**
	 * Deletes a category (soft delete)
	 */
	public function deleteCategory(
		int $id
	):bool;

	/**
	 * Deletes a batch of categories
	 */
	public function batchDeleteCategories(
		array $categoryIds
	):bool;

}
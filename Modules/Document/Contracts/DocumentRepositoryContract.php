<?php
namespace Plenty\Modules\Document\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Document\Models\Document;
use Plenty\Modules\Document\Models\DocumentComment;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * Download and list order documents as well as download, list, upload and delete category documents.
 */
interface DocumentRepositoryContract 
{

	/**
	 * Get the path to a document
	 */
	public function getDocumentPath(
		int $id
	);

	/**
	 * Get a document
	 */
	public function findById(
		int $id, 
		array $columns = [], 
		array $with = []
	):Document;

	/**
	 * List documents
	 */
	public function find(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = [], 
		string $sortBy = "id", 
		string $sortOrder = "desc"
	):PaginatedResult;

	/**
	 * Upload order documents
	 */
	public function uploadOrderDocuments(
		int $orderId, 
		string $type, 
		array $data
	):array;

	/**
	 * Delete order document
	 */
	public function deleteOrderDocument(
		int $orderId, 
		int $documentId
	):bool;

	/**
	 * Archive order document
	 */
	public function archiveOrderDocument(
		int $orderId, 
		int $documentId
	);

	/**
	 * Upload category documents
	 */
	public function uploadCategoryDocuments(
		int $categoryId, 
		array $data
	):array;

	/**
	 * Delete a category document.
	 */
	public function deleteCategoryDocument(
		int $categoryId, 
		int $documentId
	):bool;

	/**
	 * Uploads documents
	 */
	public function uploadOrderShippingPackageDocuments(
		int $packageId, 
		string $type, 
		string $document
	):array;

	/**
	 * Find documents
	 */
	public function findOrderShippingPackageDocuments(
		int $packageId, 
		string $type
	):array;

	/**
	 * Finds the current order document
	 */
	public function findCurrentOrderDocument(
		int $orderId, 
		string $type, 
		bool $includePending = false
	):Document;

	/**
	 * Finds order document.
	 */
	public function findRecentOrderDocument(
		int $orderId, 
		string $type, 
		bool $includePending = false
	):Document;

	/**
	 * Delets a document.
	 */
	public function deleteOrderShippingPackageDocuments(
		int $packageId
	):bool;

	/**
	 * Gets a document storage object.
	 */
	public function getDocumentStorageObject(
		 $key
	);

	/**
	 * Uploads a specific document.
	 */
	public function uploadOrderReturnsDocuments(
		int $returnsId, 
		string $document
	):Document;

	/**
	 * Finds a document.
	 */
	public function getOrderReturnsDocumentById(
		int $returnsId, 
		bool $withLabel = false
	):Document;

	/**
	 * Generate order document
	 */
	public function generateOrderDocument(
		int $orderId, 
		string $type, 
		array $data
	):bool;

	/**
	 * Check if there is a document without a reversed counter part
	 */
	public function documentWithoutReversalDocumentExists(
		int $orderId, 
		array $documentTypes
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
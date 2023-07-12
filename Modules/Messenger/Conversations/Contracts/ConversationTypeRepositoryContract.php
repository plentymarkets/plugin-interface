<?php
namespace Plenty\Modules\Messenger\Conversations\Contracts;

use Plenty\Modules\Account\Exceptions\CRMCritical;
use Plenty\Modules\Messenger\Conversations\Models\ConversationType;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ConversationTypeRepositoryContract is the interface for the messenger conversations types. This interface defines methods to add, update and show types.
 */
interface ConversationTypeRepositoryContract 
{

	/**
	 * Retrieves a type based on ID
	 */
	public function getType(
		int $id
	):ConversationType;

	/**
	 * Creates a new type
	 */
	public function createType(
		array $typeData
	):ConversationType;

	/**
	 * TUpdates an existing type
	 */
	public function updateType(
		int $id, 
		array $typeData
	):ConversationType;

	/**
	 * Lists all types based on filters and returns a paginated result
	 */
	public function listTypes(
		int $page, 
		int $itemsPerPage, 
		string $sortBy, 
		string $sortOrder, 
		array $filters = [], 
		array $with = []
	):PaginatedResult;

	/**
	 * Deletes a type
	 */
	public function deleteType(
		int $id
	):bool;

	/**
	 * Deletes a batch of types
	 */
	public function batchDeleteTypes(
		array $typeIds
	):bool;

}
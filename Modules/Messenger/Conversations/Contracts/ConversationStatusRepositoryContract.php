<?php
namespace Plenty\Modules\Messenger\Conversations\Contracts;

use Plenty\Modules\Account\Exceptions\CRMCritical;
use Plenty\Modules\Messenger\Conversations\Models\ConversationStatus;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ConversationStatusRepositoryContract is the interface for the messenger conversations statuses. This interface defines methods to add, update and show statuses.
 */
interface ConversationStatusRepositoryContract 
{

	/**
	 * Retrieves a status based on ID
	 */
	public function getStatus(
		int $id
	):ConversationStatus;

	/**
	 * Creates a new status
	 */
	public function createStatus(
		array $statusData
	):ConversationStatus;

	/**
	 * Updates an existing status
	 */
	public function updateStatus(
		int $id, 
		array $data
	):ConversationStatus;

	/**
	 * Lists all statuses based on provided filters
	 */
	public function listStatuses(
		int $page, 
		int $itemsPerPage, 
		string $sortBy, 
		string $sortOrder, 
		array $filters = []
	):PaginatedResult;

	/**
	 * Deletes a status (soft delete)
	 */
	public function deleteStatus(
		int $id
	):bool;

	/**
	 * Deletes a batch of statuses
	 */
	public function batchDeleteStatuses(
		array $statusIds
	):bool;

}
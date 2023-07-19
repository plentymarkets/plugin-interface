<?php
namespace Plenty\Modules\Messenger\Conversations\Contracts;

use Plenty\Modules\Account\Exceptions\CRMCritical;
use Plenty\Modules\Messenger\Conversations\Models\ConversationFolder;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The ConversationFolderRepositoryContract is the interface for the messenger conversations folders. This interface defines methods to add, update and show folders.
 */
interface ConversationFolderRepositoryContract 
{

	/**
	 * Retrieves a folder object based on UUID
	 */
	public function getFolder(
		string $uuid
	):ConversationFolder;

	/**
	 * Creates a new folder. Important! The userId property will be automatically set based on the current logged in user.
	 */
	public function createFolder(
		array $data
	):ConversationFolder;

	/**
	 * Updates an existing folder.
	 */
	public function updateFolder(
		string $uuid, 
		array $data
	):ConversationFolder;

	/**
	 * Returns a paginated result with all folders
	 */
	public function listFolders(
		int $userId, 
		int $page, 
		int $itemsPerPage, 
		string $sortBy, 
		string $sortOrder
	):PaginatedResult;

	/**
	 * Deletes a folder
	 */
	public function deleteFolder(
		string $uuid
	):bool;

}
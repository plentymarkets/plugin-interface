<?php
namespace Plenty\Modules\Messenger\Conversations\Contracts;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Auth\Access\AuthorizationException;
use JsonException;
use Plenty\Modules\Account\Exceptions\CRMCritical;
use Plenty\Modules\Messenger\Conversations\Errors\ConversationException;
use Plenty\Modules\Messenger\Conversations\Models\Conversation;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * The ConversationRepositoryContract is the interface for the messenger conversations repository. This interface defines methods to add, update and show conversations.
 */
interface ConversationRepositoryContract 
{

	/**
	 * List all conversations and returns a paginated result
	 */
	public function listConversations(
		array $request
	):array;

	/**
	 * Creates a new conversation
	 */
	public function createConversation(
		array $data
	):Conversation;

	/**
	 * Retrieves a conversation
	 */
	public function getConversation(
		string $uuid5, 
		array $with = []
	):Conversation;

	/**
	 * Updates a conversation
	 */
	public function updateConversation(
		string $uuid5, 
		array $data
	):Conversation;

	/**
	 * Sets a batch of conversations closed status
	 */
	public function updateClose(
		array $uuids, 
		bool $isClosed
	):int;

	/**
	 * Update the list of tags for a conversation
	 */
	public function updateTags(
		string $uuid, 
		array $tagIds
	):int;

	/**
	 * Adds to a batch of conversations new tags. The list of tags will be extra added to the existing list of tags for each conversation
	 */
	public function addTags(
		array $uuids, 
		array $tagIds
	):int;

	/**
	 * Sets deadline for a batch of conversations
	 */
	public function updateDeadline(
		array $uuids, 
		string $deadline = null
	):int;

	/**
	 * Marks a batch of conversations as red/not read by the given user
	 */
	public function updateRead(
		array $uuids, 
		int $userId, 
		bool $read
	):int;

	/**
	 * Subscribes a user to a conversation. A subscribed user will receive notifications related to that conversation (via email or in the admin notifications area)
	 */
	public function addSubscribers(
		string $uuid, 
		int $userId
	):int;

	/**
	 * Unsubscribes a user from a conversation
	 */
	public function removeSubscribers(
		string $uuid, 
		int $userId
	):int;

	/**
	 * Soft deletes a conversation. Conversation will be visible in the trash folder.
	 */
	public function deleteConversation(
		string $uuid5
	):int;

	/**
	 * Soft deletes a batch of conversations. Conversations will be visible in the trash folder.
	 */
	public function batchDeleteConversations(
		string $uuids
	):int;

	/**
	 * Search and returns a list of possible receivers. Search is done by contact name, contact id, order ID, user ID, user name. Search term must have minimum 3 letters
	 */
	public function searchReceiver(
		string $searchTerm
	):array;

	/**
	 * Retrieves the list of configured inboxes. If the inbox is not active it will not be returned in the response.
	 */
	public function getInboxes(
	):array;

	/**
	 * Sets priority for a batch of conversations
	 */
	public function updatePriority(
		array $uuids, 
		int $priorityId
	):int;

	/**
	 * Sets the type and status for a batch of conversations
	 */
	public function updateConversationsTypeAndStatus(
		array $conversationsUuids, 
		int $typeId, 
		int $statusId
	):bool;

	/**
	 * Returns the total number of unread conversations for current user
	 */
	public function getTotals(
	):array;

	/**
	 * Permanently deletes all the messages from trash older than $days (based on deleted at field). If days is null, all messages from trash will be permanently deleted. Emptying of the trash will be done immediately.
	 */
	public function emptyTrash(
		int $days = null
	):bool;

	/**
	 * Adds the empty trash command to a queue. Emptying of the trash will happen sometime in the future, when the first worker is available to process the queue (less impact on Elastic Search index).
	 */
	public function queueEmptyTrash(
		int $days = null
	):bool;

	/**
	 * Archives a batch of conversations. Conversations will be visible in archive folder (filter isArchive = true in list conversations)
	 */
	public function archiveConversations(
		array $uuids, 
		bool $isFromUI
	):int;

	/**
	 * Restores a batch of conversations from the archive. The operation is performed immediately.
	 */
	public function restoreArchivedConversations(
		array $uuids
	):int;

	/**
	 * Permanently deletes a batch of conversations from the archive
	 */
	public function permanentlyDeleteArchivedConversations(
		array $uuids
	):int;

	/**
	 * Restores from trash a batch of conversations
	 */
	public function batchRestoreConversations(
		array $uuids
	):int;

	/**
	 * Subscribes current user to a batch of conversations
	 */
	public function updateSubscribe(
		array $uuids
	):int;

	/**
	 * Unsubscribes the current user from a batch of conversations
	 */
	public function updateUnsubscribe(
		array $uuids
	):int;

	/**
	 * Automatically archives conversations older than $days days. The updatedAt field is taken into consideration when calculating conversation age.
	 */
	public function automaticallyArchiveConversations(
		int $days
	):bool;

	/**
	 * Assigns batch of conversation to batch of folders. The list of folders must belong to the current logged in user ID.
	 */
	public function updateConversationsFoldersRelations(
		array $conversationsUuids, 
		array $foldersUuids
	):bool;

	/**
	 * Removes conversation from all folders except the ones passed to array $foldersUuidsToKeep.
	 */
	public function updateSingleConversationFoldersRelations(
		string $conversationsUuid, 
		array $foldersUuidsToKeep
	):bool;

	/**
	 * Add multiple conversations to multiple folders
	 */
	public function addToFolders(
		array $conversationsUuids, 
		array $foldersUuids
	):bool;

	/**
	 * Remove multiple conversations from multiple folders
	 */
	public function removeFromFolders(
		array $conversationsUuids, 
		array $foldersUuids
	):bool;

}
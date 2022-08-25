<?php
namespace Plenty\Modules\Messenger\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Messenger\Models\Attachment;
use Plenty\Modules\Messenger\Models\Message;
use Plenty\Modules\Messenger\Models\MessageMetaDataControls;
use Plenty\Repositories\Contracts\FilterableContract;

/**
 * The MessengerRepositoryContract is the interface for the messenger repository. This interface defines methods to add and show/list messages.
 */
interface MessengerRepositoryContract 
{

	const DEFAULT_MESSAGES_AMOUNT = 50;

	const DEFAULT_PAGE_OF_MESSAGES = 1;

	const DEFAULT_ITEMS_PER_PAGE_OF_MESSAGES = 50;

	/**
	 * Creates a new message.
	 */
	public function add(
		array $data
	):Message;

	/**
	 * Gets a message with all its successors.
	 */
	public function show(
		string $uuid
	);

	/**
	 * Lists messages. If no reference UUID5 is given, the method returns the $amount first messages. If $successor is set to FALSE, the messages older than the referenced message will be returned.
	 */
	public function list(
		string $uuid = null, 
		bool $successors = true, 
		int $amount = self::DEFAULT_MESSAGES_AMOUNT
	):array;

	/**
	 * Lists messages.
	 */
	public function getMessages(
		int $page = self::DEFAULT_PAGE_OF_MESSAGES, 
		int $itemsPerPage = self::DEFAULT_ITEMS_PER_PAGE_OF_MESSAGES
	):array;

	/**
	 * Updates the readBy array of the message.
	 */
	public function updateReadBy(
		int $readBy, 
		string $uuid
	);

	/**
	 * Updates the tags of the message.
	 */
	public function updateTags(
		array $tags, 
		string $uuid
	);

	/**
	 * Updates the visibility of the message. Attributes that are updated are Message.visibility, Message.linkedTo and Message.accessFor.
	 */
	public function updateVisibility(
		array $data, 
		string $uuid
	);

	/**
	 * Updates the message ui control options in the message meta data and returns the message.
	 */
	public function updateControls(
		array $data, 
		string $uuid
	):Message;

	/**
	 * Sets the doneAt date in the message. If $doneAt is NULL, the doneAt date will be reset.
	 */
	public function setDone(
		string $doneAt = null, 
		string $uuid
	);

	/**
	 * Deletes a message stream by the UUID. Returns the count of messages deleted.
	 */
	public function delete(
		string $uuid
	):int;

	/**
	 * Gets a message attachment.
	 */
	public function getAttachment(
		string $uuid, 
		string $filename
	):Attachment;

	/**
	 * Gets all message attachments as zip.
	 */
	public function getAllAttachments(
		string $uuid
	):Attachment;

	/**
	 * Updates the meta data of the message.
	 */
	public function updateMetaData(
		string $uuid, 
		array $metaData
	):Message;

	/**
	 * Returns total message entries
	 */
	public function getTotalEntries(
	):int;

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
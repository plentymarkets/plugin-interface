<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The Conversation model of the messenger.
 */
abstract class Conversation 
{
	
public		$uuid;
	
public		$shortId;
	
public		$plentyIdHash;
	
public		$plentyId;
	
public		$inboxId;
	
public		$title;
	
public		$conversationRelation;
	
public		$tagIds;
	
public		$isClosed;
	
public		$isDeleted;
	
public		$referrer;
	
public		$readBy;
	
public		$subscribers;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$deletedAt;
	
public		$deadline;
	
public		$followUpDate;
	
public		$messages;
	
public		$;
	
public		$;
	
public		$;
	
public		$;
	
public		$priorityId;
	
public		$from;
	
public		$typeId;
	
public		$typePosition;
	
public		$statusId;
	
public		$statusPosition;
	
public		$hasWhisperedMessages;
	
public		$messagesTitles;
	
public		$messagesBodies;
	
public		$messagesTags;
	
public		$messagesReferrers;
	
public		$messagesFroms;
	
public		$messagesPaths;
	
public		$messagesIds;
	
public		$isMigratedToEs;
	
public		$isArchived;
	
public		$conversationPreview;
	
public		$categoryId;
	
public		$linkedFolders;
	
public		$marketplacesMetadata;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
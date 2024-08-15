<?php
namespace Plenty\Modules\Messenger\Conversations\Models;


/**
 * The Conversation model of the messenger.
 */
abstract class Conversation 
{

	const TAG_ADVANCED_FIELD_VALUE = 'tagAdvanced';

	const TAG_ADVANCED_OPERATORS = ['eq','in','nin'];
	
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
	
public		$replyTo;
	
public		$messagesPaths;
	
public		$messagesIds;
	
public		$isMigratedToEs;
	
public		$isArchived;
	
public		$conversationPreview;
	
public		$categoryId;
	
public		$linkedFolders;
	
public		$marketplacesMetadata;
	
public		$owners;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
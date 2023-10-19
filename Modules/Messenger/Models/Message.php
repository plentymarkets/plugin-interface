<?php
namespace Plenty\Modules\Messenger\Models;


/**
 * The Message model of the messenger.
 */
abstract class Message 
{

	const STORAGE = 'messages';

	const DATETIME_FORMAT = 'Y-m-d\TH:i:s.000\Z';
	
public		$uuid;
	
public		$plentyIdHash;
	
public		$parentUuid;
	
public		$conversationId;
	
public		$linkedTo;
	
public		$from;
	
public		$to;
	
public		$whispered;
	
public		$tags;
	
public		$title;
	
public		$preview;
	
public		$message;
	
public		$plainMessage;
	
public		$attachedFilesCount;
	
public		$referrer;
	
public		$metaData;
	
public		$doneAt;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$deletedAt;
	
public		$deletedBy;
	
public		$attachments;
	
public		$categoryId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
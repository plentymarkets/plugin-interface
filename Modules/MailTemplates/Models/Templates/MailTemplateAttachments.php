<?php
namespace Plenty\Modules\Mail\Templates\Models\Templates;


/**
 * The MailTemplateAttachments model. Stores the relation between
 *     mail templates - static attachments
 */
abstract class MailTemplateAttachments 
{

	const MAX_MAIL_ATTACHMENTS_SIZE = 10485760;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$relationId;
	
public		$documentId;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$configId;
	
public		$isStaticDoc;
	
public		$dynamicAttachmentId;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
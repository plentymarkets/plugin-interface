<?php
namespace Plenty\Modules\Mail\Templates\Models\Templates;


/**
 * The MailTemplateAttachments model. Stores the relation between
 *     mail templates - static attachments - dynamic attachments
 */
abstract class MailTemplateAttachments 
{

	const MAX_MAIL_ATTACHMENTS_SIZE = 10485760;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$configId;
	
public		$relationId;
	
public		$isStaticDoc;
	
public		$documentId;
	
public		$dynamicAttachmentId;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Messenger\TicketSystemMigration\Models;


/**
 * The ticket migration status model.
 */
abstract class TicketMigrationStatus 
{

	const TICKET_MIGRATION_STATUS_FAILED = 'failed';

	const TICKET_MIGRATION_STATUS_MIGRATED = 'migrated';

	const ALL_TICKET_MIGRATION_STATUS = ['failed','migrated'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$ticketId;
	
public		$migrationStatus;
	
public		$errorMessage;
	
public		$conversationId;
	
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
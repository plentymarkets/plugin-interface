<?php
namespace Plenty\Modules\Messenger\TicketSystemMigration\Contracts;


/**
 * TicketMigrationRepositoryContract is the interface for the ticketMigrationStatus repository.
 * This interface allows to list, get, create ticketMigrationStatus.
 */
interface TicketMigrationStatusRepositoryContract 
{

	/**
	 * Adds a new ticketMigrationStatus entry
	 */
	public function saveTicketMigrationStatus(
		array $data
	):bool;

}
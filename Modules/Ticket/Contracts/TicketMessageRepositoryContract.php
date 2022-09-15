<?php
namespace Plenty\Modules\Ticket\Contracts;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Ticket\Models\TicketMessage;

/**
 * The TicketMessageRepositoryContract is the interface for the ticket message repository. This interface allows to get one particular ticket message, list all ticket messages and list public and internal ticket messages.
 */
interface TicketMessageRepositoryContract 
{

	/**
	 * Gets the ticket message by the given ID.
	 */
	public function get(
		int $ticketMessageId
	):TicketMessage;

	/**
	 * Lists all ticket messages of a ticket.
	 */
	public function list(
		int $ticketId
	):array;

	/**
	 * Lists all internal ticket messages of a ticket.
	 */
	public function listInternal(
		int $ticketId
	):array;

	/**
	 * Lists all public ticket messages of a ticket
	 */
	public function listPublic(
		int $ticketId
	):array;

}
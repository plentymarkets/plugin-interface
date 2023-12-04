<?php
namespace Plenty\Modules\Order\CreditNoteReason\Contracts;

use Plenty\Modules\Order\CreditNoteReason\Models\CreditNoteReason;

/**
 * Use this interface to retrieve order credit note reasons.
 */
interface CreditNoteReasonRepositoryContract 
{

	/**
	 * Get all credit note reasons.
	 */
	public function all(
	):array;

	/**
	 * Get a credit note reason.
	 */
	public function get(
		int $id
	):CreditNoteReason;

	/**
	 * Set a credit note reason.
	 */
	public function set(
		array $data
	):array;

	/**
	 * Delete an order credit note reason
	 */
	public function delete(
		int $id
	):bool;

}
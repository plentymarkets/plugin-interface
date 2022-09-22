<?php
namespace Plenty\Modules\Order\MultiCreditNote\Contracts;

use Plenty\Modules\Order\Models\Order;

/**
 * The MultiCreditNoteRepositoryContract is the interface for the multi credit note repository. This interface allows you to update multi credit notes.
 */
interface MultiCreditNoteRepositoryContract 
{

	/**
	 * Update a multi credit note
	 */
	public function update(
		int $orderId, 
		array $data
	):Order;

	/**
	 * Update currency
	 */
	public function updateCurrency(
		int $orderId, 
		array $data
	):Order;

}
<?php
namespace Plenty\Modules\Order\ReturnReason\Contracts;

use Plenty\Modules\Order\ReturnReason\Models\ReturnReason;

/**
 * Use this interface to retrieve order return reasons.
 */
interface ReturnReasonRepositoryContract 
{

	/**
	 * Get all return reasons.
	 */
	public function all(
	):array;

	/**
	 * Get a return reason.
	 */
	public function get(
		int $id
	):ReturnReason;

	/**
	 * Set a return reason.
	 */
	public function set(
		array $data
	):array;

}
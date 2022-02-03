<?php
namespace Plenty\Modules\Order\RepairReason\Contracts;

use Plenty\Modules\Order\RepairReason\Models\RepairReason;

/**
 * Use this interface to retrieve order repair reasons.
 */
interface RepairReasonRepositoryContract 
{

	/**
	 * Get all repair reasons.
	 */
	public function all(
	):array;

	/**
	 * Get a repair reason.
	 */
	public function get(
		int $id
	):RepairReason;

	/**
	 * Set a repair reason.
	 */
	public function set(
		array $data
	):array;

}
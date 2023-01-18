<?php
namespace Plenty\Modules\Order\RepairStatus\Contracts;

use Plenty\Modules\Order\RepairStatus\Models\RepairStatus;

/**
 * Use this interface to retrieve order repair status.
 */
interface RepairStatusRepositoryContract 
{

	/**
	 * Get all repair status.
	 */
	public function all(
	):array;

	/**
	 * Get a repair status.
	 */
	public function get(
		int $id
	):RepairStatus;

	/**
	 * Set a repair status.
	 */
	public function set(
		array $data
	):array;

	/**
	 * Delete an order repair status
	 */
	public function delete(
		int $id
	):bool;

}
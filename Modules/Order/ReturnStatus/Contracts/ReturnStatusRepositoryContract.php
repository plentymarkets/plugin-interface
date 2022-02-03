<?php
namespace Plenty\Modules\Order\ReturnStatus\Contracts;

use Plenty\Modules\Order\ReturnStatus\Models\ReturnStatus;

/**
 * Use this interface to retrieve order return status.
 */
interface ReturnStatusRepositoryContract 
{

	/**
	 * Get all return status.
	 */
	public function all(
	):array;

	/**
	 * Get a return status.
	 */
	public function get(
		int $id
	):ReturnStatus;

	/**
	 * Set a return status.
	 */
	public function set(
		array $data
	):array;

}
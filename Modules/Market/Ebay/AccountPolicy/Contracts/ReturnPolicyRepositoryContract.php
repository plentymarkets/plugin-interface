<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\ReturnPolicy;

/**
 * The contract for the eBay return policy repository.
 */
interface ReturnPolicyRepositoryContract 
{

	/**
	 * Creates a new return policy.
	 */
	public function create(
		array $data
	):ReturnPolicy;

	/**
	 * Get a stored return policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):ReturnPolicy;

	public function update(
		string $id, 
		array $data
	):ReturnPolicy;

	/**
	 * Deletes a return policy.
	 */
	public function delete(
		string $id, 
		array $data
	):bool;

	/**
	 * Deletes a return policy.
	 */
	public function deleteBulk(
		int $userId, 
		int $marketId
	):bool;

	/**
	 * Get a stored fulfillment policy based on ID.
	 */
	public function getPolicies(
		int $credentialsId, 
		string $marketplaceId
	):array;

}
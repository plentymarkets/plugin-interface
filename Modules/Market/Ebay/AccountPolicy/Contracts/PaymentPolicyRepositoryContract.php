<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\PaymentPolicy;

/**
 * The contract for the eBay payment policy repository.
 */
interface PaymentPolicyRepositoryContract 
{

	/**
	 * Creates a new payment policy.
	 */
	public function create(
		array $data
	):PaymentPolicy;

	/**
	 * Get a stored payment policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):PaymentPolicy;

	/**
	 * Get a stored fulfillment policy based on credentials & marketplace ID.
	 */
	public function getPolicies(
		int $credentialsId, 
		string $marketplaceId
	):array;

	public function update(
		string $id, 
		array $data
	):PaymentPolicy;

	/**
	 * Deletes a payment policy.
	 */
	public function delete(
		string $id, 
		array $data
	):bool;

	/**
	 * Deletes payment policies.
	 */
	public function deleteBulk(
		int $userId, 
		int $marketId
	):bool;

}
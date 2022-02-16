<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\FulfillmentPolicy;

/**
 * The contract for the eBay fulfillment policy repository.
 */
interface FulfillmentPolicyRepositoryContract 
{

	/**
	 * Creates a new fulfillment policy.
	 */
	public function create(
		array $data
	):FulfillmentPolicy;

	/**
	 * Get a stored fulfillment policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):FulfillmentPolicy;

	/**
	 * Get a stored fulfillment policy based on credentials & marketplace ID.
	 */
	public function getPolicies(
		int $credentialsId, 
		string $marketplaceId
	):array;

	/**
	 * Updates a new fulfillment policy.
	 */
	public function update(
		string $id, 
		array $data
	):FulfillmentPolicy;

	/**
	 * Deletes a fulfillment policy.
	 */
	public function delete(
		string $id, 
		array $data
	):bool;

	/**
	 * Deletes fulfillment policies.
	 */
	public function deleteBulk(
		int $userId, 
		int $marketId
	):bool;

}
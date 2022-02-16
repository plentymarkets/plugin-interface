<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Exception;
use Plenty\Modules\Market\Ebay\AccountPolicy\Models\TakeBackPolicy;

/**
 * The contract for the eBay takeBack policy repository.
 */
interface TakeBackPolicyRepositoryContract 
{

	/**
	 * Creates a new takeBack policy.
	 */
	public function create(
		array $data, 
		string $marketplaceId
	):TakeBackPolicy;

	/**
	 * Get a stored takeBack policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):TakeBackPolicy;

	public function update(
		string $id, 
		array $data, 
		string $marketplaceId
	):TakeBackPolicy;

	/**
	 * Deletes takeBack policies.
	 */
	public function deleteBulk(
		int $userId, 
		int $marketId
	):bool;

	/**
	 * Get stored takeBack policies based on credentials & marketplace ID.
	 */
	public function getPolicies(
		int $credentialsId, 
		string $marketplaceId
	):array;

	/**
	 * Get a stored takeBack policy based on policy ID.
	 */
	public function getPolicy(
		int $credentialsId, 
		string $marketplaceId, 
		string $policyId
	):TakeBackPolicy;

}
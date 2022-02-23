<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Contracts;

use Exception;
use Plenty\Modules\Market\Ebay\AccountPolicy\Models\ProductCompliancePolicy;

/**
 * The contract for the eBay productCompliance policy repository.
 */
interface ProductCompliancePolicyRepositoryContract 
{

	/**
	 * Creates a new productCompliance policy.
	 */
	public function create(
		array $data, 
		string $marketplaceId
	):ProductCompliancePolicy;

	/**
	 * Get a stored productCompliance policy based on ID.
	 */
	public function get(
		string $id, 
		array $filters = []
	):ProductCompliancePolicy;

	public function update(
		string $id, 
		array $data, 
		string $marketplaceId
	):ProductCompliancePolicy;

	/**
	 * Deletes productCompliance policies.
	 */
	public function deleteBulk(
		int $userId, 
		int $marketId
	):bool;

	/**
	 * Get a stored productCompliance policy based on credentials & marketplace ID.
	 */
	public function getPolicies(
		int $credentialsId, 
		string $marketplaceId
	):array;

	/**
	 * Get a stored productCompliance policy based on policy ID.
	 */
	public function getPolicy(
		int $credentialsId, 
		string $marketplaceId, 
		string $policyId
	):ProductCompliancePolicy;

}
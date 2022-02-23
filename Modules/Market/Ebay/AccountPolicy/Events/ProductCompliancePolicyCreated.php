<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\ProductCompliancePolicy;

/**
 * An event class fired after a new product compliance policy is created.
 */
abstract class ProductCompliancePolicyCreated extends \Plenty\Modules\Market\Ebay\AccountPolicy\Events\ProductCompliancePolicyEvent 

{

	public function __construct(
		ProductCompliancePolicy $productCompliancePolicy
	)
	{
		return null;
	}

	/**
	 * Get the ProductCompliancePolicy instance.
	 */
	public function getProductCompliancePolicy(
	):ProductCompliancePolicy
	{
		return null;
	}

}
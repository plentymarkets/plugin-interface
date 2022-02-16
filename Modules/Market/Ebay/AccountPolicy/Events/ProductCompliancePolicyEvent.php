<?php
namespace Plenty\Modules\Market\Ebay\AccountPolicy\Events;

use Plenty\Modules\Market\Ebay\AccountPolicy\Models\ProductCompliancePolicy;

/**
 * A base event class for all product compliance policy events. Each product compliance policy event expects a ProductCompliancePolicy model.
 */
abstract class ProductCompliancePolicyEvent 
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
<?php
namespace Plenty\Modules\Order\ShippingProfiles\Contracts;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\ShippingProfiles\Models\OrderShippingProfileCombination;

/**
 * Order shipping profile repository contract to load the shipping profile combinations for an order or for the given order data as an array
 */
interface OrderShippingProfilesRepositoryContract 
{

	/**
	 * Get the shipping profile combinations for an order.
	 */
	public function getCombinations(
		int $orderId, 
		bool $uniqueMainShippingProfiles = false
	):array;

	/**
	 * Get the shipping profile combinations for the given order data.
	 */
	public function getCombinationsForOrderData(
		array $data, 
		bool $uniqueMainShippingProfiles = false
	):array;

}
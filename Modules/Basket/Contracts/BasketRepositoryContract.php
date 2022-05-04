<?php
namespace Plenty\Modules\Basket\Contracts;

use Plenty\Modules\Basket\Models\Basket;

/**
 * The BasketRepositoryContract is the interface for the basket repository. This interface allows to get the shopping cart of the current customer session.
 */
interface BasketRepositoryContract 
{

	/**
	 * Gets the shopping cart from current customer session.
	 */
	public function load(
		bool $forceCreate = false
	):Basket;

	/**
	 * Save the current shopping cart data.
	 */
	public function save(
		array $data
	);

	/**
	 * Add a coupon code to the shopping cart.
	 */
	public function setCouponCode(
		string $couponCode
	):Basket;

	/**
	 * Remove a coupon code from the shopping cart.
	 */
	public function removeCouponCode(
	):Basket;

	/**
	 * Delete the basket for current session
	 */
	public function deleteBasket(
	):Basket;

	/**
	 * Load amount from tax-free items
	 */
	public function getTaxFreeAmount(
		array $basketItems = []
	):float;

}
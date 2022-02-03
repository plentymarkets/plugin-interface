<?php
namespace Plenty\Modules\Market\Ebay\Marketplace\Helpers;

use Plenty\Modules\Market\Ebay\Marketplace\Contracts\MarketplaceRepositoryContract;
use Plenty\Modules\Market\Ebay\Marketplace\Models\Marketplace;

/**
 * Helper class that allows getting information about an eBay marketplace more easily.
 */
abstract class MarketplaceHelper 
{

	/**
	 * Get marketplace data model based on filters.
	 */
	abstract public function get(
		array $filters
	):Marketplace;

	/**
	 * Get the marketplace ID based on given filters. Possible filters: `marketplaceId`, `referrerId`, `marketId`, `siteId`.
	 */
	abstract public function getMarketplaceId(
		array $filters
	):string;

	/**
	 * Get the marketplace ID based on given filters. Possible filters: `marketplaceId`, `referrerId`, `marketId`, `siteId`.
	 */
	abstract public function getMarketplaceIdForRest(
		array $filters
	):string;

	/**
	 * Get all available marketplace IDs.
	 */
	abstract public function getMarketplaceIds(
	):array;

	/**
	 * Get the referrer ID based on given filters. Possible filters: `marketplaceId`, `referrerId`, `marketId`, `siteId`.
	 */
	abstract public function getReferrerId(
		array $filters
	):string;

	/**
	 * Get all available referrer IDs.
	 */
	abstract public function getReferrerIds(
	):array;

	/**
	 * Get the site ID based on given filters. Possible filters: `marketplaceId`, `referrerId`, `marketId`, `siteId`.
	 */
	abstract public function getSiteId(
		array $filters
	):string;

	/**
	 * Get all available site IDs.
	 */
	abstract public function getSiteIds(
	):array;

	/**
	 * Get the market ID based on given filters. Possible filters: `marketplaceId`, `referrerId`, `marketId`, `siteId`.
	 */
	abstract public function getMarketId(
		array $filters
	):string;

	/**
	 * Get the market ID based on given filters. Possible filters: `marketplaceId`.
	 */
	abstract public function getMarketIdForRest(
		array $filters
	):string;

	/**
	 * Get all available market IDs.
	 */
	abstract public function getMarketIds(
	):array;

	/**
	 * Get the currency based on given filters. Possible filters: `marketplaceId`, `referrerId`, `marketId`, `siteId`.
	 */
	abstract public function getCurrency(
		array $filters
	):string;

	/**
	 * Get the currency based on given filters. Possible filters: `marketplaceId`.
	 */
	abstract public function getCurrencyForRest(
		array $filters
	):string;

	/**
	 * Get the shortcut based on given filters. Possible filters: `marketplaceId`, `referrerId`, `marketId`, `siteId`.
	 */
	abstract public function getShortcut(
		array $filters
	):string;

}
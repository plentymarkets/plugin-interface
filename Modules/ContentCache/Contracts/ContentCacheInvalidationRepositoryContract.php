<?php
namespace Plenty\Modules\ContentCache\Contracts;


/**
 * Interface for content cache invalidation
 */
interface ContentCacheInvalidationRepositoryContract 
{

	/**
	 * Invalidate all cache entries related to given variation IDs.
	 */
	public function invalidateVariationIds(
		array $variationIds, 
		int $plentyId = null, 
		int $delaySeconds = 0
	);

	/**
	 * Invalidate cache entries for specified item IDs.
	 */
	public function invalidateItemIds(
		array $itemIds, 
		int $plentyId = null
	);

	/**
	 * Invalidate all cache entries related to given plenty ID.
	 */
	public function invalidateAll(
		int $plentyId = null, 
		bool $bypassActiveCheck = false
	);

	/**
	 * Invalidate cache entries by URI.
	 */
	public function invalidateUri(
		string $uri
	);

	/**
	 * Store all collected invalidation entries in the database.
	 */
	public function storeInvalidationStacks(
	);

}
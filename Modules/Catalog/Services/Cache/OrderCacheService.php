<?php
namespace Plenty\Modules\Catalog\Services\Cache;

use Exception;
use Plenty\Modules\Catalog\Helpers\Config\ConfigHelper;
use Plenty\Modules\Catalog\Helpers\Throwables\CatalogThrowables;
use Plenty\Modules\Catalog\Services\Cache\Base\CacheService;

/**
 * Order Processing Cache.
 */
abstract class OrderCacheService 
{

	const CACHE_AGE_SECONDS = 7200;

	const CACHE_KEY_PREFIX = 'OrderProcessingCache';

	/**
	 * Puts a cache
	 */
	abstract public static function putCache(
		string $identifier, 
		 $value = true
	);

	/**
	 * Adds a cache
	 */
	abstract public static function addCache(
		string $identifier, 
		 $value = true
	);

	/**
	 * Checks if cache exists
	 */
	abstract public static function isCached(
		string $identifier
	):bool;

	/**
	 * Gets the cached value
	 */
	abstract public static function getCache(
		string $identifier
	);

	/**
	 * Checks if cache exists and if it has the given value
	 */
	abstract public static function isCachedWithValue(
		string $identifier, 
		 $value = true
	):bool;

	/**
	 * Store cache entry
	 */
	abstract public static function put(
		 $keys, 
		 $value, 
		array $additional = []
	);

	/**
	 * Adds a cache entry
	 */
	abstract public static function add(
		 $keys, 
		 $value, 
		array $additional = []
	);

	/**
	 * Gets a cache entry
	 */
	abstract public static function get(
		 $keys, 
		 $default = null
	);

	/**
	 * Checks if cache entry exists
	 */
	abstract public static function has(
		 $keys
	):bool;

	/**
	 * Deletes cache entries by prefix
	 */
	abstract public static function deleteByPrefix(
		 $keys
	);

	/**
	 * Delete cache entry
	 */
	abstract public static function forget(
		 $keys
	);

	/**
	 * Flushes the cache
	 */
	abstract public static function flush(
	);

	/**
	 * Gets the prefix
	 */
	abstract public static function getPrefix(
	):string;

	/**
	 * Gets the age
	 */
	abstract public static function getAge(
	):int;

}
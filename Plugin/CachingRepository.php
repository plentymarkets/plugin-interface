<?php
namespace Plenty\Plugin;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Plugin\Monitoring\Facades\RedisCounter;

/**
 * caching repository
 */
abstract class CachingRepository 
{

	const MAX_SIZE_CONFIG_KEY = 'database.redis.plugin_max_stored_bytes';

	const MAX_CACHING_VALUE_SIZE = 512;

	/**
	 * Determine if an item exists in the cache.
	 */
	abstract public function has(
		string $key
	):bool;

	/**
	 * Retrieve an item from the cache by key.
	 */
	abstract public function get(
		string $key, 
		 $default = null
	);

	/**
	 * Retrieve multiple items from the cache by key.
	 */
	abstract public function many(
		array $keys
	):array;

	/**
	 * Retrieve an item from the cache and delete it.
	 */
	abstract public function pull(
		string $key, 
		 $default = null
	);

	/**
	 * Store an item in the cache.
	 */
	abstract public function put(
		string $key, 
		 $value, 
		int $minutes = null
	);

	/**
	 * Store multiple items in the cache for a given number of minutes.
	 */
	abstract public function putMany(
		array $values, 
		int $minutes
	);

	/**
	 * Store an item in the cache if the key does not exist.
	 */
	abstract public function add(
		string $key, 
		 $value, 
		int $minutes
	):bool;

	/**
	 * Get an item from the cache, or store the default value.
	 */
	abstract public function remember(
		string $key, 
		int $minutes, 
		callable $callback
	);

	/**
	 * Remove an item from the cache.
	 */
	abstract public function forget(
		string $key
	):bool;

	abstract public function deleteByPrefix(
		string $prefix
	);

	abstract public static function getPrefix(
	):string;

}
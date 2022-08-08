<?php
namespace Plenty\Modules\ContentCache\Contracts;


/**
 * Interface for registering request query parameters which should be handled by the content cache
 */
interface ContentCacheQueryParamsRepositoryContract 
{

	/**
	 * Register an array of query parameters to be excluded from the content cache.
	 */
	public function registerExcluded(
		array $queryParams
	);

	/**
	 * Register an array of query params to be considered when determining the requested cache entry.
	 */
	public function registerIncluded(
		array $queryParams
	);

	public function getRegistered(
		string $key = ""
	):array;

}
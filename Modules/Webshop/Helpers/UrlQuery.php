<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Modules\Webshop\Contracts\LocalizationRepositoryContract;
use Plenty\Modules\Webshop\Contracts\WebstoreConfigurationRepositoryContract;

/**
 * Helper to generate and manipulate urls to be used in the webshop.
 */
abstract class UrlQuery 
{

	/**
	 * Create a new instance.
	 */
	abstract public static function create(
		string $path = null, 
		string $lang = null
	):UrlQuery;

	/**
	 * Check if a trailing slash should be appended to urls.
	 */
	abstract public static function shouldAppendTrailingSlash(
	):bool;

	/**
	 * Append a string to the path the url without checking for slashes.
	 */
	abstract public function append(
		string $suffix
	):self;

	/**
	 * Append a new path to the existing one. Ensure having a slash as glue between existing path and the new segment.
	 */
	abstract public function join(
		string $path
	):self;

	/**
	 * Return the absolute url by prepending the HTTPS domain of the current client.
	 */
	abstract public function toAbsoluteUrl(
		bool $includeLanguage = false
	):string;

	/**
	 * Return the path as a relative url.
	 */
	abstract public function toRelativeUrl(
		bool $includeLanguage = false
	):string;

	/**
	 * Return the path. This equals the relative url without a leading slash.
	 */
	abstract public function getPath(
		bool $includeLanguage = false
	):string;

	/**
	 * Compare current path to a string independent of a trailing slash.
	 */
	abstract public function equals(
		string $path
	):bool;

}
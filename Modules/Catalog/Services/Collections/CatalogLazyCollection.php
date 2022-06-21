<?php
namespace Plenty\Modules\Catalog\Services\Collections;

use Exception;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Plenty\Modules\Catalog\Helpers\CatalogHelper;
use Plenty\Modules\Catalog\Models\CatalogExportResult;

/**
 * LazyCollection wrapper with limited access. Only specific methods are allowed.
 */
abstract class CatalogLazyCollection 
{

	const MAX_CHUNK_SIZE = 500;

	/**
	 * Iterates through results. Results can be the chunks if the collection is chunked.
	 */
	abstract public function each(
		callable $callback
	);

	/**
	 * Converts the results into an array
https://laravel.com/docs/8.x/collections#method-toarray
https://laravel.com/docs/8.x/collections#lazy-collection-introduction
	 */
	abstract public function toArray(
	):array;

	/**
	 * Chunks the results
https://laravel.com/docs/8.x/collections#method-chunk
https://laravel.com/docs/8.x/collections#lazy-collection-introduction
	 */
	abstract public function chunk(
		int $size = self::MAX_CHUNK_SIZE
	):CatalogLazyCollection;

}
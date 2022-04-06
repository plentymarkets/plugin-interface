<?php
namespace Plenty\Repositories\Models;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Plenty\Repositories\Contracts\Pagination;
use Plenty\Repositories\Contracts\PaginationOptionsProvider;

/**
 * paginated result
 */
abstract class PaginatedResult 
{

	abstract public function paginate(
	):self;

	/**
	 * Returns the page number as received
	 */
	abstract public function getPage(
	):int;

	/**
	 * Returns the normalized page number - checked if out of logical bounds
( not below 0, not greater than the last page ) and adjusted
	 */
	abstract public function getCurrentPage(
	):int;

	abstract public function getTotalCount(
	):int;

	abstract public function isLastPage(
	):bool;

	abstract public function getItemIndexFrom(
	):int;

	abstract public function getItemIndexTo(
	):int;

	abstract public function getLastPage(
	):int;

	abstract public function getResult(
	):array;

	abstract public function setResult(
		 $result
	);

	abstract public function sumMetaData(
		string $metaColumn = "", 
		string $groupBy = "", 
		string $metaDataName = ""
	);

	abstract public function rowCountMetaData(
		string $metaColumn = "", 
		string $groupBy = "", 
		string $metaDataName = ""
	);

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

	/**
	 * Convert the object to its JSON representation.
	 */
	abstract public function toJson(
		int $options = 0
	):string;

	/**
	 * Specify data which should be serialized to JSON
	 */
	abstract public function jsonSerialize(
	);

}
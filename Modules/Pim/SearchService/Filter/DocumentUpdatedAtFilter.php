<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Used to filter by elastic search document last update timestamp
 */
abstract class DocumentUpdatedAtFilter implements TypeInterface

{

	/**
	 * Get the timestamp of the filter
	 */
	abstract public function getTimestamp(
	):string;

	abstract public function getType(
	):string;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}
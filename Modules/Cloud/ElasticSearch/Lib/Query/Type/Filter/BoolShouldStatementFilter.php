<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Combine multiple filters. minimum should match defines how many statements need to match
 */
abstract class BoolShouldStatementFilter implements TypeInterface

{

	abstract public function toArray(
	):array;

	abstract public function setMinimumShouldMatch(
		int $minimumShouldMatch
	);

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}
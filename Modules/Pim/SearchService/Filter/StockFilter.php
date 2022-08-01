<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\RangeFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for stock
 */
abstract class StockFilter implements TypeInterface

{

	/**
	 * Restricts the result to meet the specified net stock value depending on the operator
	 */
	abstract public function netStock(
		float $netStock, 
		string $operator = "eq"
	):StockFilter;

	/**
	 * Restricts the result to meet the specified physical stock value depending on the operator
	 */
	abstract public function physicalStock(
		float $physicalStock, 
		string $operator = "eq"
	):StockFilter;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}
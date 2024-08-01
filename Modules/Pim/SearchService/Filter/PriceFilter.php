<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\RangeFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNestedShouldFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for prices
 */
abstract class PriceFilter implements TypeInterface

{

	/**
	 * Get the path of the filter
	 */
	abstract public function getPath(
	):string;

	/**
	 * Restricts the result to have a price between the specified min and max value.
	 */
	abstract public function between(
		float $min = null, 
		float $max = null
	);

	/**
	 * Restricts the result to a price between the specified min and max value. The price must be related to one of the specified price ids.
	 */
	abstract public function betweenByPriceId(
		array $priceIds = [], 
		float $min = null, 
		float $max = null
	):self;

	abstract public function priceValue(
		float $priceValue, 
		int $priceType, 
		string $operator = "eq"
	):self;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}
<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for salesPrices
 */
abstract class SalesPriceFilter implements TypeInterface

{

	/**
	 * Restricts the result to have any of the price ids.
	 */
	abstract public function hasAtLeastOnePrice(
		array $priceIds
	):self;

	abstract public function hasPriceIds(
		array $priceIds
	):self;

	/**
	 * Restricts the result to not match the specified IDs.
	 */
	abstract public function hasNotPriceIds(
		array $priceIds
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
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
 * Includes filters for markets
 */
abstract class MarketFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the market id.
	 */
	abstract public function isVisibleForMarket(
		float $marketId
	):self;

	/**
	 * Restricts the result to have any of the market ids.
	 */
	abstract public function isVisibleForAtLeastOneMarket(
		array $marketIds
	):self;

	/**
	 * Restricts the result to not have any of the market ids.
	 */
	abstract public function isNotAvailableForAtLeastOneMarket(
		array $marketIds
	):self;

	/**
	 * Restricts the result to have all the market ids.
	 */
	abstract public function isVisibleForAllMarkets(
		array $marketIds
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
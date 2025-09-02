<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\WildcardStringFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNestedFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for skus
 */
abstract class SkuFilter implements TypeInterface

{

	/**
	 * Get the path of the filter.
	 */
	abstract public function getPath(
	):string;

	/**
	 * Restricts the result to have a sku with the market referrer id.
	 */
	abstract public function hasMarketId(
		float $marketId
	):self;

	/**
	 * Restricts the result to have a sku with the account id.
	 */
	abstract public function hasAccountId(
		int $accountId
	):self;

	/**
	 * Restricts the result to have a sku with the status.
	 */
	abstract public function hasStatus(
		string $status
	):self;

	/**
	 * Restricts the result to have a specified sku.
	 */
	abstract public function hasSku(
		string $sku
	):self;

	/**
	 * Restricts the result to have a specified sku referrer.
	 */
	abstract public function hasSkuReferrer(
		string $skuReferrer
	):self;

	/**
	 * Restricts the result to not have a specified sku referrer.
	 */
	abstract public function hasNoSkuReferrer(
		string $skuReferrer
	):self;

	/**
	 * Restricts the result to not have a specified sku.
	 */
	abstract public function hasNoSku(
		string $sku
	):self;

	abstract public function hasSkuIn(
		array $skus
	):self;

	abstract public function hasNoSkuIn(
		array $skus
	):self;

	abstract public function hasSkuLike(
		string $sku
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
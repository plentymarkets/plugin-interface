<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use DataResponse;
use Illuminate\Contracts\Support\Arrayable;
use Plenty\Legacy\Facades\DataFactory;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\Helper\SalesPriceHelper;
use RetailPriceDetectData;
use RetailPriceDetectResultData;

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

	abstract public function hasLowestPrice(
		 $bool = true
	);

	/**
	 * Restricts the result item that have a price for the given parameters.
	 */
	abstract public function hasValidPrice(
		array $data
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
<?php
namespace Plenty\Modules\Item\Search\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\FieldExistsStatement;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolShouldFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Pim\SearchService\Filter\LegacyFilter;
use Plenty\Modules\Pim\SearchService\Filter\VariationBundleFilter as PimFilter;

/**
 * foo
 */
abstract class VariationBundleFilter implements TypeInterface

{

	abstract public function hasBundleType(
		string $bundleType
	);

	/**
	 * use if value is "null"
	 */
	abstract public function hasNoBundleType(
	);

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
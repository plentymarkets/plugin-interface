<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\FieldExistsStatement;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\FieldIsMissingStatement;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolShouldFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for bundles
 */
abstract class VariationBundleFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the bundle type.
	 */
	abstract public function hasBundleType(
		string $bundleType
	):self;

	/**
	 * Restricts the result to have the any of the bundle types.
	 */
	abstract public function hasBundleTypes(
		array $bundleTypes
	):self;

	/**
	 * Restricts the result to have the no bundle type.
	 */
	abstract public function hasNoBundleType(
	):self;

	/**
	 * Restricts the result to have the no bundle type.
	 */
	abstract public function isNotBundle(
	):self;

	/**
	 * Restricts the result to have the bundle component variation id.
	 */
	abstract public function hasBundleComponentVariationId(
		int $componentVariationId
	):self;

	/**
	 * Restricts the result to not match the specified bundle type.
	 */
	abstract public function hasNotBundleType(
		string $bundleType
	):self;

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
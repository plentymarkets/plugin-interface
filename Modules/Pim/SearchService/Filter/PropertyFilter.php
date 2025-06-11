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
 * Includes filters for Properties
 */
abstract class PropertyFilter implements TypeInterface

{

	/**
	 * Restricts the result to have any of the property ids.
	 */
	abstract public function hasPropertyIds(
		array $ids
	):self;

	/**
	 * Restricts the result to NOT have any of the property ids.
	 */
	abstract public function hasNotPropertyIds(
		array $ids
	):self;

	/**
	 * Restricts the result to have the property selection id.
	 */
	abstract public function hasPropertySelection(
		int $id
	):self;

	/**
	 * Restricts the result to have any of the property selection ids.
	 */
	abstract public function hasAtLeastOnePropertySelection(
		array $ids
	):self;

	/**
	 * Restricts the result to have all of the property selection ids.
	 */
	abstract public function hasEachPropertySelection(
		array $ids
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
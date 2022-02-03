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
 * Includes filters for tags
 */
abstract class TagFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the tag id.
	 */
	abstract public function hasTag(
		int $tagId
	):self;

	/**
	 * Restricts the result to have any of the tag ids.
	 */
	abstract public function hasAnyTag(
		array $tagIds
	):self;

	/**
	 * Restricts the result to have all of the tag ids.
	 */
	abstract public function hasAllTags(
		array $tagIds
	):self;

	/**
	 * Restricts the result to not match the specified IDs.
	 */
	abstract public function hasNotTagIds(
		array $tagIds
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
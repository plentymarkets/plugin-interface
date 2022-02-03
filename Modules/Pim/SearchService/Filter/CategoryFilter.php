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
 * Includes filters for categories
 */
abstract class CategoryFilter implements TypeInterface

{

	const DEPTH_BRANCH = 'branch';

	const DEPTH_ANY = 'any';

	const KEY_BRANCH = 'branch';

	const KEY_ANY = 'any';

	/**
	 * Restricts the result to have any of the categoryIds.
	 */
	abstract public function isInAtLeastOneCategory(
		array $categoryIds, 
		string $depth = self::DEPTH_ANY
	):self;

	/**
	 * Get the path by depth.
	 */
	abstract public static function getPathByDepth(
		string $depth
	):string;

	/**
	 * Restricts the result to have all of the categoryIds.
	 */
	abstract public function isInEachCategory(
		array $categoryIds, 
		string $depth = self::DEPTH_ANY
	):self;

	/**
	 * Restricts the result to have the categoryId.
	 */
	abstract public function isInCategory(
		int $categoryId, 
		string $depth = self::DEPTH_ANY
	):self;

	/**
	 * Restricts the result to have a category.
	 */
	abstract public function isInACategory(
		bool $bool = true
	):self;

	/**
	 * Restricts the result to not match the specified IDs.
	 */
	abstract public function hasNotCategoryIds(
		array $categoryIds, 
		string $depth = self::DEPTH_ANY
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
<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\WildcardStringFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for supplier
 */
abstract class SupplierFilter implements TypeInterface

{

	abstract public function matchSupplierItemNumber(
		string $term, 
		string $precision = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::SEARCH_TYPE_EXACT
	):self;

	/**
	 * Restricts the result to have the supplier id.
	 */
	abstract public function hasSupplier(
		int $supplierId
	):self;

	/**
	 * Restricts the result to have any of the tag ids.
	 */
	abstract public function hasAnySupplier(
		array $supplierIds
	):self;

	/**
	 * Restricts the result to have all of the tag ids.
	 */
	abstract public function hasAllSuppliers(
		array $supplierIds
	):self;

	/**
	 * Restricts the result to not match the specified IDs.
	 */
	abstract public function hasNotSupplierIds(
		array $supplierIds
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
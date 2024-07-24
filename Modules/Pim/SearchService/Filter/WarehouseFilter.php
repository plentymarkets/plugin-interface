<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\RangeFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for warehouse
 */
abstract class WarehouseFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the warehouse ID.
	 */
	abstract public function isInWarehouse(
		int $warehouseId
	):WarehouseFilter;

	/**
	 * Restricts the result to not match the specified IDs.
	 */
	abstract public function hasNotWarehouseIds(
		array $warehouseIds
	):WarehouseFilter;

	/**
	 * Restricts the result to have the any of the warehouse IDs.
	 */
	abstract public function hasWarehouseIds(
		array $warehouseIds
	):WarehouseFilter;

	abstract public function hasPhysicalStockInWarehouseIds(
		array $warehouseIds, 
		string $operator = "gt"
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
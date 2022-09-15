<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectFilterAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;
use Plenty\Modules\Pim\SearchService\Filter\VariationBaseFilter;

/**
 * Filter Aggregated Data if variation is salable
 */
abstract class SalableFilterAggregation implements AggregationInterface

{

	const NAME = 'salable';

	/**
	 * Get the name of the aggregation
	 */
	abstract public function getName(
	):string;

	abstract public function getAggregation(
	):array;

	abstract public function addFilter(
		TypeInterface $filter
	);

	abstract public function setIndex(
		 $index
	);

	abstract public function toArray(
	):array;

	abstract public function process(
		array $data
	):array;

	abstract public function addAggregation(
		AggregationInterface $aggregation
	);

	abstract public function addSource(
		SourceInterface $source
	):AggregationInterface;

	abstract public function setPage(
		int $page, 
		int $rowsPerPage
	):AggregationInterface;

	abstract public function getSources(
	):array;

}
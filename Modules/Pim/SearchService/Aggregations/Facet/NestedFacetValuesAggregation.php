<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Facet;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * Provides a list of all facet value ids of a specific facet
 */
abstract class NestedFacetValuesAggregation implements AggregationInterface

{

	const NAME = 'nestedFacetValues';

	/**
	 * Get the name of the aggregation
	 */
	abstract public function getName(
	):string;

	/**
	 * Get the aggregation as array
	 */
	abstract public function getAggregation(
	):array;

	/**
	 * Returns the aggregation as array
	 */
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
<?php
namespace Plenty\Modules\Item\Search\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\ProcessorInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectValueCardinalityAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * To be written
 */
abstract class CardinalityAggregationBase implements AggregationInterface

{

	abstract public function getName(
	):string;

	abstract public function getAggregation(
	):array;

	abstract public function getField(
	):string;

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
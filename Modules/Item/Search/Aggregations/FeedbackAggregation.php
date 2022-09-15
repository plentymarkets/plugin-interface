<?php
namespace Plenty\Modules\Item\Search\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectRangeAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;
use Plenty\Modules\Pim\MappingLayer\ElasticSearch\LegacyAggregation;
use Plenty\Modules\Pim\SearchService\Aggregations\Feedback\FeedbackRangeAggregation as PimAggregation;
use Plenty\Modules\Pim\SearchService\Aggregations\Processors\FeedbackRangeAggregationProcessor;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\VariationDataInterfaceResultInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;

/**
 * To be written
 */
abstract class FeedbackAggregation implements AggregationInterface

{

	const NAME = 'feedback';

	abstract public function getName(
	):string;

	abstract public function getField(
	):string;

	abstract public function getRanges(
	);

	abstract public function getAggregation(
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
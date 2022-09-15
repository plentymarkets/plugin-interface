<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Feedback;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectRangeAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * Provides the count feedbacks in specific ranges (1 to 6, 2 to 6, 3 to 6, 4 to 6 and 5 to 6)
 */
abstract class FeedbackRangeAggregation implements AggregationInterface

{

	const NAME = 'feedback';

	/**
	 * Get the name of the aggregation
	 */
	abstract public function getName(
	):string;

	/**
	 * Get the field of the aggregation
	 */
	abstract public function getField(
	):string;

	/**
	 * Get the ranges of the aggregation
	 */
	abstract public function getRanges(
	):array;

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
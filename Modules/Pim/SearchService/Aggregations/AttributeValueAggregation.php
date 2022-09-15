<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectTermsAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * Aggregate data by attributeValue ids
 */
abstract class AttributeValueAggregation implements AggregationInterface

{

	const NAME = 'attributeValues';

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

	abstract public function getAggregation(
	):array;

	abstract public function setInclude(
		string $string
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
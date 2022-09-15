<?php
namespace Plenty\Modules\Pim\SearchService\Aggregations\Price;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;

/**
 * Get min price by price id for found variations
 */
abstract class ItemMinPriceAggregation implements AggregationInterface

{

	const NAME = 'minPriceByItemId';

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
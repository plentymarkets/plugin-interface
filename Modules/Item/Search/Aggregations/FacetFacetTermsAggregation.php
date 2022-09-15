<?php
namespace Plenty\Modules\Item\Search\Aggregations;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\Object\ObjectTermsAggregation;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;
use Plenty\Modules\Item\Search\Helper\SearchHelper;
use Plenty\Modules\Pim\MappingLayer\ElasticSearch\LegacyAggregation;
use Plenty\Modules\Pim\SearchService\Helper\FacetHelper;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\VariationDataInterfaceResultInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;

/**
 * To be written
 */
abstract class FacetFacetTermsAggregation implements AggregationInterface

{

	const NAME = 'facets';

	abstract public function getName(
	):string;

	abstract public function getField(
	);

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
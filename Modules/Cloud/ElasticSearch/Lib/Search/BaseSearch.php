<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Search;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\CollapseInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\ScoreModifier\ScoreModifierInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Pagination\SearchAfterPagination;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Pagination\SearchPaginationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\SuggestionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;
use Plenty\Modules\Pim\MappingLayer\Traits\BaseSearchHelperTrait;

/**
 * Base class for different Search classes
 */
abstract class BaseSearch implements SearchInterface

{

	abstract public function setIsSourceDisabled(
		bool $isSourceDisabled
	);

	abstract public function setTrackTotalHits(
		bool $trackTotalHits
	);

	abstract public function addFilter(
		TypeInterface $filter
	):self;

	abstract public function addPostFilter(
		TypeInterface $filter
	):self;

	abstract public function addQuery(
		TypeInterface $query
	):self;

	abstract public function addSource(
		SourceInterface $source
	):self;

	abstract public function setSorting(
		SortingInterface $sorting
	):self;

	abstract public function addAggregation(
		AggregationInterface $aggregation
	):self;

	abstract public function addSuggestion(
		SuggestionInterface $suggestion
	):self;

	abstract public function setPage(
		int $page, 
		int $rowsPerPage
	):self;

	abstract public function setPagination(
		 $pagination
	);

	abstract public function setCollapse(
		CollapseInterface $collapse
	);

	abstract public function getSources(
	):array;

	abstract public function setScoreModifier(
		ScoreModifierInterface $scoreModifier
	):self;

	abstract public function setMaxResultWindow(
		int $maxResults = 10000
	);

	abstract public function setIndex(
		 $index
	);

	abstract public function isSearchAfter(
	);

	abstract public function getFilterRaw(
	);

	abstract public function getQueriesRaw(
	);

	abstract public function getAggregationsRaw(
	):array;

	abstract public function getSorting(
	);

	abstract public function getScoreModifier(
	);

	abstract public function process(
		array $data
	);

	abstract public function getName(
	):string;

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

}
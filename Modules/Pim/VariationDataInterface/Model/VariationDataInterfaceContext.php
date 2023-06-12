<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model;

use Illuminate\Support\Collection;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\ScoreModifier\ScoreModifierInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\SuggestionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SortingInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\IndependentSource;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\SourceInterface;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\Context\GroupBy;
use Ramsey\Uuid\Uuid;

/**
 * The Conext to define what you get frome the VDI
 */
abstract class VariationDataInterfaceContext 
{

	const RETURN_TYPE_MODEL = 'model';

	const RETURN_TYPE_ARRAY = 'array';

	/**
	 * Add filter to restrict the result.
	 */
	abstract public function addFilter(
		TypeInterface $filter
	):VariationDataInterfaceContext;

	abstract public function setFilter(
		Collection $filter
	):self;

	/**
	 * Add aggregation to aggregate the result.
	 */
	abstract public function addAggregation(
		AggregationInterface $aggregation
	):VariationDataInterfaceContext;

	/**
	 * Add suggestion to get suggestions in the result.
	 */
	abstract public function addSuggestion(
		SuggestionInterface $suggestion
	):VariationDataInterfaceContext;

	/**
	 * Add query to restrict the result. Queries affecting the score.
	 */
	abstract public function addQuery(
		TypeInterface $filter
	):VariationDataInterfaceContext;

	/**
	 * Get filters which are added to the context.
	 */
	abstract public function getFilter(
	):Collection;

	/**
	 * Get ids which are added to the context.
	 */
	abstract public function getIds(
	);

	/**
	 * Set ids. All other restrictions are ignored.
	 */
	abstract public function setIds(
		Collection $ids
	);

	/**
	 * Get aggregations which are added to the result.
	 */
	abstract public function getAggregations(
	);

	/**
	 * Get suggestions which are added to the result.
	 */
	abstract public function getSuggestions(
	);

	/**
	 * Get queries which are added to the result.
	 */
	abstract public function getQuery(
	);

	/**
	 * Get parts which are added to the result.
	 */
	abstract public function getParts(
	);

	/**
	 * Add part to the result. A part specifies what is returned in the result.
	 */
	abstract public function addPart(
		AttributeInterface $part
	);

	/**
	 * Set parts. A part specifies what is returned in the result.
	 */
	abstract public function setParts(
		array $parts
	):VariationDataInterfaceContext;

	/**
	 * Get plenty ids. No further functionality added yet
	 */
	abstract public function getPlentyIds(
	);

	/**
	 * Set plenty ids. No further functionality added yet
	 */
	abstract public function setPlentyIds(
		Collection $plentyIds
	);

	/**
	 * Get languages. No further functionality added yet
	 */
	abstract public function getLanguages(
	);

	/**
	 * Set languages. No further functionality added yet
	 */
	abstract public function setLanguages(
		Collection $languages
	);

	/**
	 * Get the wanted page value.
	 */
	abstract public function getPage(
	):int;

	/**
	 * Set the page and Items per page.
	 */
	abstract public function setPage(
		int $page = 1, 
		int $perPage = 50
	):VariationDataInterfaceContext;

	/**
	 * Get the wanted per page value.
	 */
	abstract public function getPerPage(
	):int;

	/**
	 * returns whether get all found or not
	 */
	abstract public function isGetAllFound(
	):bool;

	abstract public function getLimit(
	);

	/**
	 * set whether the result should return all found entities without pagination or not
	 */
	abstract public function setGetAllFound(
		bool $getAll, 
		int $limit = null
	):self;

	/**
	 * Get the wanted batch size.
	 */
	abstract public function getBatchSize(
	):int;

	/**
	 * Set the batch size of result batch.
	 */
	abstract public function setBatchSize(
		int $batchSize
	):VariationDataInterfaceContext;

	/**
	 * Get the current context id.
	 */
	abstract public function getContextId(
	):string;

	/**
	 * Get the wanted group by or null if non is set.
	 */
	abstract public function getGroupBy(
	):GroupBy;

	/**
	 * Set a group by for the result.
	 */
	abstract public function setGroupBy(
		GroupBy $groupBy
	):VariationDataInterfaceContext;

	/**
	 * Get the decorated return type.
	 */
	abstract public function getDecoratedReturnType(
	):string;

	/**
	 * Get the sorting the result should be sorted by.
	 */
	abstract public function getSorting(
	):SortingInterface;

	/**
	 * SeSett the sorting the result should be sorted by.
	 */
	abstract public function setSorting(
		SortingInterface $sorting
	):VariationDataInterfaceContext;

	/**
	 * Get a score modifier. Score modifier are manipulation the score of the result hits.
	 */
	abstract public function getScoreModifier(
	):ScoreModifierInterface;

	/**
	 * Set a score modifier. Score modifier are manipulation the score of the result hits.
	 */
	abstract public function setScoreModifier(
		ScoreModifierInterface $scoreModifier
	):VariationDataInterfaceContext;

	/**
	 * Get the additional source which should be added to the result.
	 */
	abstract public function getAdditionalSource(
	):IndependentSource;

	/**
	 * Set the additional source which should be added to the result.
	 */
	abstract public function setAdditionalSource(
		IndependentSource $additionalSource
	):VariationDataInterfaceContext;

	/**
	 * Returns whether the context has an additional source or not
	 */
	abstract public function hasAdditionalSource(
	):bool;

	/**
	 * Returns whether the in memory cache should be used or not
	 */
	abstract public function getUseInMemoryCache(
	):bool;

	/**
	 * Set whether the in memory cache should be used or not. It is recommended to use this cache (Default)
	 */
	abstract public function setUseInMemoryCache(
		bool $useInMemoryCache
	):VariationDataInterfaceContext;

	/**
	 * Return whether the search cache should be used or not
	 */
	abstract public function getUseSearchCache(
	):bool;

	/**
	 * Set whether the search cache should be used or not. It is recommended to use this cache (Default)
	 */
	abstract public function setUseSearchCache(
		bool $useSearchCache
	):VariationDataInterfaceContext;

	/**
	 * Returns whether the context has an additional source or not
	 */
	abstract public function isHasAdditionalSource(
	):bool;

	/**
	 * Set whether the context has an additional source or not. This is normally determined automatically
	 */
	abstract public function setHasAdditionalSource(
		bool $hasAdditionalSource
	);

	/**
	 * Get the search after key.
	 */
	abstract public function getSearchAfterKey(
	):string;

	/**
	 * Set the search after key. Set null for the first page.
	 */
	abstract public function setSearchAfterKey(
		string $searchAfterKey
	):self;

	/**
	 * Returns whether this is an search after search.
	 */
	abstract public function isSearchAfter(
	):bool;

}
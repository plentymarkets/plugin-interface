<?php
namespace Plenty\Modules\Webshop\ItemSearch\Factories;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Collapse\CollapseInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\ScoreModifier\RandomScore;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Aggregation\AggregationInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\SuggestionInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Suggestion\TermSuggestion;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\BaseSorting;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\MultipleSorting;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SingleNestedSorting;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting\SingleSorting;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\Mutator\MutatorInterface;
use Plenty\Modules\Pim\MappingLayer\Helper\ElasticSearchMappingHelper;
use Plenty\Modules\Pim\SearchService\Query\ManagedSearchQuery;
use Plenty\Modules\Pim\SearchService\Query\NameAutoCompleteQuery;
use Plenty\Modules\Pim\VariationDataInterface\Model\Context\GroupBy;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;
use Plenty\Modules\Webshop\Contracts\PriceDetectRepositoryContract;
use Plenty\Modules\Webshop\ItemSearch\Extensions\ItemSearchExtension;
use Plenty\Modules\Webshop\ItemSearch\Extensions\SortExtension;
use Plenty\Modules\Webshop\ItemSearch\Helpers\LoadResultFields;
use Plenty\Modules\Webshop\Template\Contracts\TemplateConfigRepositoryContract;
use Plenty\Modules\Webshop\WebshopServiceProvider;
use WebshopMutator;

/**
 * Base factory to prepare and build search requests on variation data interface
 */
abstract class BaseSearchFactory 
{

	/**
	 * Create a new factory instance based on properties of an existing factory.
	 */
	abstract public function inherit(
		array $inheritedProperties = []
	):BaseSearchFactory;

	/**
	 * Add a mutator to transform search results.
	 */
	abstract public function withMutator(
		MutatorInterface $mutator, 
		bool $excludeDependencies = false, 
		int $position = 1000
	):self;

	/**
	 * Add a filter. Will create a new instance of the filter class if not already created.
	 */
	abstract public function createFilter(
		string $filterClass, 
		array $params = []
	);

	/**
	 * Add a filter. Will override existing filter instances.
	 */
	abstract public function withFilter(
		TypeInterface $filter
	):self;

	/**
	 * Set fields to be contained in search result.
	 */
	abstract public function withResultFields(
		 $fields
	):self;

	/**
	 * Get the requested result fields for this search request.
	 */
	abstract public function getResultFields(
	):array;

	/**
	 * Check if result field is already included in the source of the search.
	 */
	abstract public function hasResultField(
		string $field
	):bool;

	/**
	 * Get additional result fields required by webshop mutators.
	 */
	abstract public function getAdditionalResultFields(
	):array;

	/**
	 * Add an extension.
	 */
	abstract public function withExtension(
		string $extensionClass, 
		array $extensionParams = []
	):self;

	/**
	 * Get all registered extensions
	 */
	abstract public function getExtensions(
	):array;

	/**
	 * Get all registered mutators
	 */
	abstract public function getMutators(
	):array;

	abstract public function getAdditionalFilterParams(
	);

	/**
	 * Add an aggregation
	 */
	abstract public function withAggregation(
		AggregationInterface $aggregation
	):self;

	/**
	 * Add a suggestion
	 */
	abstract public function withSuggestion(
		SuggestionInterface $suggestion
	):self;

	/**
	 * Set pagination parameters.
	 */
	abstract public function setPage(
		int $page, 
		int $itemsPerPage
	):self;

	/**
	 * Add sorting parameters
	 */
	abstract public function sortBy(
		string $field, 
		string $order = \Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory::SORTING_ORDER_DESC
	):self;

	/**
	 * Add multiple sorting parameters
	 */
	abstract public function sortByMultiple(
		array $sortingList
	):self;

	/**
	 * Set the order of the search results by ids.
	 */
	abstract public function setOrder(
		array $idList
	):self;

	/**
	 * Group results by field
	 */
	abstract public function groupBy(
		string $field, 
		array $sortings = []
	):self;

}
<?php
namespace Plenty\Modules\Webshop\ItemSearch\Services;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Webshop\Helpers\PropertyFileService;
use Plenty\Modules\Webshop\ItemSearch\Factories\BaseSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Factories\FacetSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Factories\MultiSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Factories\VariationSearchFactory;
use Plenty\Modules\Webshop\ItemSearch\Helpers\DefaultSearchResult;

/**
 * Execute item searches using the variation data interface
 */
abstract class ItemSearchService 
{

	/**
	 * Execute multiple item searches at once.
	 */
	abstract public function getResults(
		 $searches
	):array;

	/**
	 * Get result of a single search request.
	 */
	abstract public function getResult(
		 $searchFactory
	):array;

	/**
	 * Generates an image url for every existent variation property which is passed within $results param.
	 */
	abstract public function getResultsWithDownloadLinkForProperties(
		array $results
	);

}
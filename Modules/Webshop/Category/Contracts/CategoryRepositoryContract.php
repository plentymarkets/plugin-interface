<?php
namespace Plenty\Modules\Webshop\Category\Contracts;

use Plenty\Modules\Category\Models\Category;
use Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate;

/**
 * Get category data for plentyShop.
 */
interface CategoryRepositoryContract 
{

	/**
	 * Return one category by id.
	 */
	public function get(
		int $categoryId, 
		string $language = null, 
		int $webstoreId = null, 
		array $additionalFilter = [], 
		bool $toObject = true
	);

	/**
	 * Return one category by category url.
	 */
	public function getByCategoryUrl(
		string $categoryUrl, 
		string $language = null, 
		int $webstoreId = null
	):Category;

	/**
	 * Retrieve the url for a category by id.
	 */
	public function getUrl(
		int $categoryId, 
		string $language = null, 
		int $webstoreId = null, 
		array $additionalFilter = []
	):string;

	/**
	 * Return navigation tree for plentyShop LTS only.
	 */
	public function getNavigationTree(
		 $type = "all", 
		string $language = "de", 
		int $clientId = null, 
		int $maxLevel = 6, 
		int $customerClassId = 0, 
		string $resultFieldsTemplate = \Plenty\Modules\Webshop\ItemSearch\Helpers\ResultFieldTemplate::TEMPLATE_CATEGORY_TREE
	):array;

}
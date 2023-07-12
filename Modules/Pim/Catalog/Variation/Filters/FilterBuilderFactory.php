<?php
namespace Plenty\Modules\Pim\Catalog\Variation\Filters;

use Plenty\Modules\Pim\Catalog\Variation\Filters\Availability\VariationHasAtLeastOneAvailability;
use Plenty\Modules\Pim\Catalog\Variation\Filters\BundleType\VariationHasAtLeastOneBundleType;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Category\VariationIsInAtLeastOneCategory;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Category\VariationIsInCategories;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Client\VariationHasAtLeastOneClient;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Client\VariationHasClients;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Image\VariationHasImage;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Item\ItemBelongsToAtLeastOneAmazonFlatFile;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Item\ItemCreatedAt;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Item\ItemHasAtLeastOneFlagOne;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Item\ItemHasAtLeastOneFlagTwo;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Item\ItemHasAtLeastOneId;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Item\ItemIsType;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Item\ItemUpdatedAt;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Manufacturer\ItemHasAtLeastOneManufacturer;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Markets\VariationIsVisibleForAtLeastOneMarket;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Markets\VariationIsVisibleForMarkets;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Price\SalesPriceUpdatedAt;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Property\VariationHasAtLeastOnePropertySelection;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Property\VariationHasPropertySelections;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Sku\VariationHasSku;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Stock\StockUpdatedAt;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Tag\VariationHasAtLeastOneTag;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Tag\VariationHasTags;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Variation\VariationCreatedAt;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Variation\VariationHasChildren;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Variation\VariationIds;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Variation\VariationIsActive;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Variation\VariationIsMain;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Variation\VariationRelatedUpdatedAt;
use Plenty\Modules\Pim\Catalog\Variation\Filters\Variation\VariationUpdatedAt;

/**
 * This factory provides methods to retrieve all available catalog filter builders.
 */
abstract class FilterBuilderFactory 
{

	abstract public function variationHasAtLeastOneAvailability(
	):VariationHasAtLeastOneAvailability;

	abstract public function variationHasAtLeastOneBundleType(
	):VariationHasAtLeastOneBundleType;

	abstract public function variationIsInAtLeastOneCategory(
	):VariationIsInAtLeastOneCategory;

	abstract public function variationIsInCategories(
	):VariationIsInCategories;

	abstract public function variationHasAtLeastOneClient(
	):VariationHasAtLeastOneClient;

	abstract public function variationHasClients(
	):VariationHasClients;

	abstract public function variationHasImage(
	):VariationHasImage;

	abstract public function itemBelongsToAtLeastOneAmazonFlatFile(
	):ItemBelongsToAtLeastOneAmazonFlatFile;

	abstract public function itemCreatedAt(
	):ItemCreatedAt;

	abstract public function itemHasAtLeastOneFlagOne(
	):ItemHasAtLeastOneFlagOne;

	abstract public function itemHasAtLeastOneFlagTwo(
	):ItemHasAtLeastOneFlagTwo;

	abstract public function itemHasAtLeastOneId(
	):ItemHasAtLeastOneId;

	abstract public function itemIsType(
	):ItemIsType;

	abstract public function itemUpdatedAt(
	):ItemUpdatedAt;

	abstract public function itemHasAtLeastOneManufacturer(
	):ItemHasAtLeastOneManufacturer;

	abstract public function variationIsVisibleForAtLeastOneMarket(
	):VariationIsVisibleForAtLeastOneMarket;

	abstract public function variationIsVisibleForMarkets(
	):VariationIsVisibleForMarkets;

	abstract public function variationHasAtLeastOnePropertySelection(
	):VariationHasAtLeastOnePropertySelection;

	abstract public function variationHasPropertySelections(
	):VariationHasPropertySelections;

	abstract public function variationHasSku(
	):VariationHasSku;

	abstract public function variationHasAtLeastOneTag(
	):VariationHasAtLeastOneTag;

	abstract public function variationHasTags(
	):VariationHasTags;

	abstract public function variationCreatedAt(
	):VariationCreatedAt;

	abstract public function variationHasChildren(
	);

	abstract public function variationIds(
	);

	abstract public function variationIsActive(
	):VariationIsActive;

	abstract public function variationIsMain(
	):VariationIsMain;

	abstract public function variationUpdatedAt(
	):VariationUpdatedAt;

	abstract public function variationRelatedUpdatedAt(
	):VariationRelatedUpdatedAt;

	abstract public function salesPriceUpdatedAt(
	):SalesPriceUpdatedAt;

	abstract public function stockUpdatedAt(
	):StockUpdatedAt;

}
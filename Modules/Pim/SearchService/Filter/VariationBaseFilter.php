<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Exception;
use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\FieldExistsStatement;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchAutoCompleteFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchFuzzyFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\WildcardStringFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for the base variation
 */
abstract class VariationBaseFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the number. Possible precisions are: exact, fuzzy and autocomplete
	 */
	abstract public function hasNumber(
		string $number, 
		string $precision
	):self;

	/**
	 * Restricts the result to have any of the numbers.
	 */
	abstract public function hasAnyNumber(
		array $numbers
	);

	/**
	 * Restricts the result to have the main variation id.
	 */
	abstract public function hasMainVariationId(
		int $mainVariationId
	):self;

	/**
	 * Restricts the result to have any of the main variation ids.
	 */
	abstract public function hasMainVariationIds(
		array $mainVariationIds
	):self;

	/**
	 * Restricts the result to have active variations only.
	 */
	abstract public function isActive(
	):self;

	/**
	 * Restricts the result to have inactive variations only.
	 */
	abstract public function isInactive(
	):self;

	/**
	 * Restricts the result to have the variation id.
	 */
	abstract public function hasId(
		int $id
	):self;

	/**
	 * Restricts the result to have any of the variation ids.
	 */
	abstract public function hasIds(
		array $ids
	):self;

	/**
	 * Restricts the result to have the item id.
	 */
	abstract public function hasItemId(
		int $itemId
	):self;

	/**
	 * Restricts the result to have the any price calculation id
	 */
	abstract public function hasAnyPriceCalculationId(
	):self;

	/**
	 * Restricts the result to have the any of the price calculation ids
	 */
	abstract public function hasPriceCalculationIds(
		array $ids
	):self;

	/**
	 * Restricts the result to have the price calculation uuid
	 */
	abstract public function hasPriceCalculationUuid(
		string $uuid
	):self;

	/**
	 * Restricts the result to have the any of the price calculation uuid
	 */
	abstract public function hasAnyPriceCalculationUuid(
		array $uuids
	):self;

	/**
	 * Restricts the result to have the any of the item ids
	 */
	abstract public function hasItemIds(
		array $itemIds
	):self;

	/**
	 * Restricts the result to have no child's
	 */
	abstract public function isMain(
	):self;

	/**
	 * Restricts the result to have child's only
	 */
	abstract public function isChild(
	):self;

	/**
	 * Restricts the result whether is salable or not.
	 */
	abstract public function isSalable(
		bool $bool = true
	):self;

	/**
	 * Restricts the result whether is hidden in category list or not.
	 */
	abstract public function isHiddenInCategoryList(
		bool $bool = true
	):self;

	/**
	 * This filter is not implemented. Deprecated.
	 */
	abstract public function hasADescriptionInLanguage(
		string $language
	):self;

	/**
	 * Restricts the result to have an image.
	 */
	abstract public function hasAnImageOrItemHasAnImage(
		 $bool = true
	):self;

	/**
	 * Restricts the result to have an item image.
	 */
	abstract public function hasAnImage(
		bool $bool = true
	):self;

	/**
	 * Restricts the result to have the manufacturer.
	 */
	abstract public function hasManufacturer(
		int $manufacturerId
	):self;

	/**
	 * Restricts the result to have the supplier.
	 */
	abstract public function hasSupplier(
		int $supplierId
	):self;

	/**
	 * Restricts the result to have any of the availabilities.
	 */
	abstract public function hasAtLeastOneAvailability(
		array $availabilities
	):self;

	/**
	 * Restricts the result to have active child variations or not.
	 */
	abstract public function hasActiveChildren(
		bool $bool = true
	):self;

	/**
	 * Restricts the result to have child variations or not.
	 */
	abstract public function hasChildren(
		bool $bool = true
	):self;

	/**
	 * Restricts the result to have the customs tariff number.
	 */
	abstract public function hasCustomsTariffNumber(
		string $customsTariffNumber
	):self;

	/**
	 * Restricts the result to have no customs tariff number.
	 */
	abstract public function customsTariffNumberNotExists(
	):self;

	/**
	 * Restricts the result to have a customs tariff number.
	 */
	abstract public function customsTariffNumberExists(
	):self;

	/**
	 * Restricts the result to not match the specified referrer IDs.
	 */
	abstract public function hasNotReferrerIds(
		array $ids
	):self;

	/**
	 * Restricts the result to not match the specified IDs.
	 */
	abstract public function hasNotIds(
		array $ids
	):self;

	/**
	 * Restricts the result to not match the specified item IDs.
	 */
	abstract public function hasNotItemIds(
		array $itemIds
	):self;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}
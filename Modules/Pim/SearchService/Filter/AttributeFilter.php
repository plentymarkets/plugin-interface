<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\FieldExistsStatement;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for attributes
 */
abstract class AttributeFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the specified attributeId.
	 */
	abstract public function hasAttribute(
		int $attributeId
	):self;

	/**
	 * Restricts the result to have any of the specified attributeId.
	 */
	abstract public function hasAnyAttribute(
		array $attributeIds
	):self;

	/**
	 * Restricts the result to have any of the specified attributeId.
	 */
	abstract public function hasNoAnyAttribute(
		array $attributeIds
	):self;

	/**
	 * Restricts the result to has all of the specified attributeId.
	 */
	abstract public function hasAllAttributes(
		array $attributeIds
	):self;

	/**
	 * Restricts the result to have the specified attributeValueId.
	 */
	abstract public function hasAttributeValue(
		int $attributeValueId
	):self;

	/**
	 * Restricts the result to have any of the specified attributeValueId.
	 */
	abstract public function hasAnyAttributeValue(
		array $attributeValueIds
	):self;

	/**
	 * Restricts the result to not have any of the specified attributeValueId.
	 */
	abstract public function hasNoAnyAttributeValue(
		array $attributeValueIds
	):self;

	/**
	 * Restricts the result to have all of the specified attributeValueId.
	 */
	abstract public function hasAllAttributeValues(
		array $attributeValueIds
	):self;

	/**
	 * Restricts the result to have no attribute value.
	 */
	abstract public function hasNoAttributeValue(
	);

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}
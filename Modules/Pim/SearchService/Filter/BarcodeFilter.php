<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\FieldExistsStatement;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchExactFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\MatchFuzzyFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for barcodes
 */
abstract class BarcodeFilter implements TypeInterface

{

	/**
	 * Restricts the result to have a specified code.
	 */
	abstract public function hasCode(
		 $code, 
		string $precision
	):self;

	/**
	 * Restricts the result to have a specified type. Not implemented.
	 */
	abstract public function hasType(
		string $type
	);

	/**
	 * Restricts the result to have a specified id.
	 */
	abstract public function hasId(
		int $id
	):self;

	/**
	 * Restricts the result to have no barcodes
	 */
	abstract public function hasNoBarcode(
	):self;

	/**
	 * Restricts the result to have at least one barcode
	 */
	abstract public function hasBarcode(
	):self;

	/**
	 * Restricts the result to have any of the barcode ids.
	 */
	abstract public function hasAnyBarcode(
		array $barcodeIds
	):self;

	abstract public function withoutBarcode(
		int $barcodeId
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
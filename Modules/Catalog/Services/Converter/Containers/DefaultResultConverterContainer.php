<?php
namespace Plenty\Modules\Catalog\Services\Converter\Containers;

use Plenty\Modules\Catalog\Contracts\CatalogResultConverterContract;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\BaseResultConverter;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\CSVResultConverter;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\CSVResultConverterArrayAsJson;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\JSONResultConverter;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\TXTResultConverter;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\XMLResultConverter;

/**
 * The DefaultResultConverterContainer collects all result converters for a specific template and is prefilled with all default result converters.
 */
abstract class DefaultResultConverterContainer extends \Plenty\Modules\Catalog\Services\Converter\Containers\ResultConverterContainer 

{

	abstract public function addResultConverter(
		BaseResultConverter $resultConverter, 
		bool $isDefault = false
	);

	abstract public function getResultConverters(
	):array;

	abstract public function getResultConvertersCount(
	):int;

	abstract public function getResultConverter(
		string $key
	):CatalogResultConverterContract;

	abstract public function getDefaultResultConverter(
	):CatalogResultConverterContract;

}
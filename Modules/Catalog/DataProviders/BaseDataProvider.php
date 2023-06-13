<?php
namespace Plenty\Modules\Catalog\DataProviders;

use Plenty\Modules\Catalog\Contracts\DataProviderContract;
use Plenty\Modules\Catalog\Contracts\TemplateContract;

/**
 * The BaseDataProvider is used to define a section of simple mappings in the catalogue. A simple mapping refers to the assignment of a value in the plentysystems system or a manually predefined value to a specific key. E.g. mapping the value of a specific text property to the key 'description'.
 */
abstract class BaseDataProvider 
{

	abstract public function getRows(
	):array;

	abstract public function setTemplate(
		TemplateContract $template
	);

	abstract public function setMapping(
		array $mapping
	);

}
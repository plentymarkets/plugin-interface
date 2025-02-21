<?php
namespace Plenty\Modules\Catalog\Models;

use Plenty\Modules\Catalog\Callables\EmptyCatalogTemplateFieldCallable;
use Plenty\Modules\Catalog\Constants\CatalogMappingTypes;
use Plenty\Modules\Catalog\Containers\CatalogTemplateFieldContainer;
use Plenty\Modules\Catalog\Contracts\CatalogMappingValueProviderContract;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldCallableContract;
use Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldContract;
use Plenty\Modules\Catalog\DataProviders\CatalogEmptyMappingValueProvider;

/**
 * A simple template field is used to fill a specific key through a data source which is defined by the user.
 */
abstract class SimpleTemplateField implements \Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldContract

{

	/**
	 * SimpleTemplateField constructor.
	 */
	abstract public function __construct(
		string $exportKey, 
		string $key, 
		string $label, 
		bool $isRequired = false, 
		bool $isLocked = false, 
		bool $isArray = false, 
		array $meta = [], 
		array $defaultSources = [], 
		string $description = null
	);

	abstract public function getKey(
	):string;

	abstract public function applyCustomChannelMapKey(
		string $key
	);

	abstract public function getLabel(
	):string;

	abstract public function isLocked(
	):bool;

	abstract public function isArray(
	):bool;

	abstract public function getMeta(
	):array;

	abstract public function getCallable(
	):CatalogTemplateFieldCallableContract;

	abstract public function getDefaultSources(
	):array;

	abstract public function getMappingValueProvider(
	):CatalogMappingValueProviderContract;

	abstract public function getExportKey(
	):string;

	abstract public function getNestedFields(
	):CatalogTemplateFieldContainer;

	abstract public function getType(
	):int;

	abstract public function getDescription(
	):string;

	abstract public function isRequired(
	):bool;

	abstract public function setCallable(
		CatalogTemplateFieldCallableContract $callable
	);

	abstract public function toArray(
	):array;

}
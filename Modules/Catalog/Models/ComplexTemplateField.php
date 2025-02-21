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
 * A complex template field is used for Mappings with predefined valid values. The user has to choose a valid value and then provide a condition, which determines in which cases this value will be sent.
 */
abstract class ComplexTemplateField implements \Plenty\Modules\Catalog\Contracts\CatalogTemplateFieldContract

{

	/**
	 * ComplexTemplateField constructor.
	 */
	abstract public function __construct(
		string $exportKey, 
		string $key, 
		string $label, 
		CatalogMappingValueProviderContract $catalogMappingValueProvider, 
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

	abstract public function isRequired(
	):bool;

	abstract public function isLocked(
	):bool;

	abstract public function isArray(
	):bool;

	abstract public function getMeta(
	):array;

	abstract public function getCallable(
	):CatalogTemplateFieldCallableContract;

	abstract public function getMappingValueProvider(
	):CatalogMappingValueProviderContract;

	abstract public function getDefaultSources(
	):array;

	abstract public function getExportKey(
	):string;

	abstract public function getNestedFields(
	):CatalogTemplateFieldContainer;

	abstract public function getType(
	):int;

	abstract public function getDescription(
	):string;

	abstract public function setCallable(
		CatalogTemplateFieldCallableContract $callable
	);

	abstract public function toArray(
	):array;

}
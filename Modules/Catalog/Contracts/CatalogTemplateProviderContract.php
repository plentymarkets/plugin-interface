<?php
namespace Plenty\Modules\Catalog\Contracts;


/**
 * The CatalogTemplateProviderContract is the interface that has to be implemented by the catalogue template providers. Each registered template should have a catalogue template provider (multiple templates can use the same one) to avoid booting them if they are not necessary. A catalogue template provider fills a template with data at the moment the template gets booted. Whenever it is possible, use the abstract class Plenty\Modules\Catalog\Templates\BaseTemplateProvider.
 */
interface CatalogTemplateProviderContract 
{

	/**
	 * Returns the different mapping sections including the information which data provider fills them. Each entry in the array represents a section of the catalogue UI.
	 */
	public function getMappings(
	):array;

	/**
	 * Returns the filters that will be applied in each export of templates that will be booted by this provider.
	 */
	public function getFilter(
	):array;

	/**
	 * Returns the callback functions that will be applied to the raw data (so before the mapping occurs) of each item in the export. Every callback function will receive an array of the raw item data and should return this array with the changes that should be applied (e.g. function (array $item){ --your code-- return $item}).
	 */
	public function getPreMutators(
	):array;

	/**
	 * Returns the callback functions that will be applied to the mapped data of each item in the export. Every callback function will receive an array of the mapped item data und should return this array with the changes that should be applied (e.g. function (array $item){ --your code-- return $item}).
	 */
	public function getPostMutators(
	):array;

	/**
	 * Returns a callback function that is called if a field with the specific key "sku" got mapped. The function will receive the value that got mapped, the raw data array of this item and the type of the mapped source. It should return the new value (e.g. function ($value, array $item, $mappingType){ --your code-- return $value})).
	 */
	public function getSkuCallback(
	):callable;

	/**
	 * Returns an array of settings that will be displayed in the UI of each catalogue with a template that uses this provider. The selected values for all those settings can then be used in the export.
	 */
	public function getSettings(
	):array;

	/**
	 * Returns an array of meta information which can be used to forward information to the export which could otherwise not be received.
	 */
	public function getMetaInfo(
	):array;

}
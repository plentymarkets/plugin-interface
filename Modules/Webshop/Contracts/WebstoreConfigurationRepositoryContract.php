<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\System\Models\WebstoreConfiguration;

/**
 * Repository for webstore information
 */
interface WebstoreConfigurationRepositoryContract 
{

	/**
	 * Get the webstore configuration
	 */
	public function getWebstoreConfiguration(
	):WebstoreConfiguration;

	/**
	 * Get the webstore configuration by webstore id
	 */
	public function getWebstoreConfigurationByWebstoreId(
		int $webstoreId
	):WebstoreConfiguration;

	/**
	 * Get the activate languages of the webstore
	 */
	public function getActiveLanguageList(
	):array;

	/**
	 * Get the default shipping-country-Id of the webstore
	 */
	public function getDefaultShippingCountryId(
	):int;

	/**
	 * Copy a favicon from the frontend webspace to the internal storage to be available at the frontend domain.
	 */
	public function setFaviconFromWebspace(
		int $plentyId, 
		string $faviconUrl
	):string;

}
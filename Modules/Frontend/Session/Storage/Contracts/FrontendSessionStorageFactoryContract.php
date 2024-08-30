<?php
namespace Plenty\Modules\Frontend\Session\Storage\Contracts;

use Plenty\Modules\Frontend\Session\Storage\Models\Customer;
use Plenty\Modules\Frontend\Session\Storage\Models\LocaleSettings;
use Plenty\Modules\Frontend\Session\Storage\Models\Order;
use Plenty\Modules\Frontend\Session\Storage\Models\Plugin;

/**
 * The FrontendSessionStorageFactoryContract is the interface for the front end session storage repository. This interface allows to get information about the locale, the customer, the order, the plugin and the forum from the session.
 */
interface FrontendSessionStorageFactoryContract 
{

	/**
	 * Get the locale settings from the session storage.
	 */
	public function getLocaleSettings(
	):LocaleSettings;

	/**
	 * Get the customer data from the session storage.
	 */
	public function getCustomer(
	):Customer;

	/**
	 * Get the order data from the session storage.
	 */
	public function getOrder(
	):Order;

	/**
	 * Get the plugin data from the session storage.
	 */
	public function getPlugin(
	):Plugin;

}
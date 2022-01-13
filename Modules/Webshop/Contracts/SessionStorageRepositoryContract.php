<?php
namespace Plenty\Modules\Webshop\Contracts;

use Plenty\Modules\Frontend\Session\Storage\Models\Customer;
use Plenty\Modules\Frontend\Session\Storage\Models\Order;

/**
 * Repository for webshop session information
 */
interface SessionStorageRepositoryContract 
{

	const DELIVERY_ADDRESS_ID = 'deliveryAddressId';

	const BILLING_ADDRESS_ID = 'billingAddressId';

	const CURRENCY = 'currency';

	const NOTIFICATIONS = 'notifications';

	const LATEST_ORDER_ID = 'latestOrderId';

	const LAST_ACCESSED_ORDER = 'lastAccessedOrder';

	const GUEST_EMAIL = 'guestEmail';

	const LAST_SEEN_ITEMS = 'lastSeenItems';

	const CROSS_SELLING_TYPE = 'crossSellingType';

	const CROSS_SELLING_SORTING = 'crossSellingSorting';

	const GUEST_WISHLIST = 'guestWishList';

	const GUEST_WISHLIST_MIGRATION = 'guestWishListMigration';

	const ORDER_CONTACT_WISH = 'orderContactWish';

	const ORDER_CUSTOMER_SIGN = 'orderCustomerSign';

	const SHIPPING_PRIVACY_HINT_ACCEPTED = 'shippingPrivacyHintAccepted';

	const NEWSLETTER_SUBSCRIPTIONS = 'newsletterSubscriptions';

	const READONLY_CHECKOUT = 'readOnlyCheckout';

	const LAST_PLACE_ORDER_TRY = 'lastPlaceOrderTry';

	/**
	 * Set a value to a given key in the session
	 */
	public function setSessionValue(
		string $key, 
		 $value
	);

	/**
	 * Get a value from the session by a given key
	 */
	public function getSessionValue(
		string $key
	);

	/**
	 * Get the customer session model
	 */
	public function getCustomer(
	):Customer;

	/**
	 * Get the order session model
	 */
	public function getOrder(
	):Order;

	/**
	 * Get the url of the document call while running a rest call.
	 */
	public function getHttpReferrerUri(
	):string;

}
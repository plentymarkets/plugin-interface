<?php
namespace Plenty\Modules\Helper\AutomaticEmail\Models;


/**
 * Provides constants for the automatic email template names.
 */
abstract class AutomaticEmailTemplate 
{

	const SHOP_ORDER = 'ShopOrder';

	const SHOP_ORDER_REGENERATE_ORDER_CONFIRMATION_LINK = 'ShopOrderRegenerateOrderConfirmationLink';

	const CONTACT_NEW_PASSWORD = 'NewPWD2User';

	const CONTACT_NEW_PASSWORD_CONFIRMATION = 'ChangePWD2User';

	const CONTACT_NEW_EMAIL = 'ChangeCustomerEmail';

	const CUSTOMER_EVENT = 'customerEvent';

	const CONTACT_REGISTRATION = 'CustomerRegistration';

	const NEWSLETTER_OPTIN = 'NewsletterDoubleOptIn';

	const NEWSLETTER_OPTIN_CONFIRM = 'NewNewsletter';

	const SUBSCRIPTION_ORDER = 'SubscriptionOrder';

	const SCHEDULER_CHANGED = 'schedulerChanged';

	const POSITIVE_STOCK_NOTIFICATION = 'positiveStockNotification';

	const SSL_HOSTMASTER = 'sslHostmaster';

	const SSL_CERT_EXPIRE = 'sslCertExpire';

	const SSL_ORDER_DONE = 'sslOrderDone';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\ShopBuilder\Widgets\Helper;


/**
 * Class to define widget types
 */
abstract class WidgetTypes 
{

	const DEFAULT = 'default';

	const STRUCTURE = 'structure';

	const STATIC = 'static';

	const HEADER = 'header';

	const FOOTER = 'footer';

	const ITEM = 'item';

	const SINGLE_ITEM = 'singleitem';

	const SET_ITEM = 'setitem';

	const SET_COMPONENT = 'setcomponent';

	const SET_COMPONENT_ONLY = 'setcomponentonly';

	const ITEM_CONTENT = 'itemcontent';

	const CATEGORY_ITEM = 'categoryitem';

	const ITEM_SEARCH = 'itemsearch';

	const TOOLBAR = 'toolbar';

	const NAVIGATION = 'navigation';

	const CHECKOUT = 'checkout';

	const CUSTOMER = 'customer';

	const MY_ACCOUNT = 'myaccount';

	const FORM = 'form';

	const SOFT_LOGIN = 'softlogin';

}
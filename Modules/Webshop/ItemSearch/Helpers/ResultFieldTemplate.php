<?php
namespace Plenty\Modules\Webshop\ItemSearch\Helpers;

use Plenty\Log\Traits\Loggable;

/**
 * Collect templates to read required result fields for several views from.
 */
abstract class ResultFieldTemplate 
{

	const TEMPLATE_LIST_ITEM = 'Webshop.ResultFields.ListItem';

	const TEMPLATE_SINGLE_ITEM = 'Webshop.ResultFields.SingleItem';

	const TEMPLATE_BASKET_ITEM = 'Webshop.ResultFields.BasketItem';

	const TEMPLATE_AUTOCOMPLETE_ITEM_LIST = 'Webshop.ResultFields.AutoCompleteListItem';

	const TEMPLATE_CATEGORY_TREE = 'Webshop.ResultFields.CategoryTree';

	const TEMPLATE_VARIATION_ATTRIBUTE_MAP = 'Webshop.ResultFields.VariationAttributeMap';

	/**
	 * Get the path to result fields file from a plugin
	 */
	abstract public static function get(
		string $template
	):string;

	/**
	 * Load result fields from a template file. Result field templates can be registered from a plugin.
	 */
	abstract public static function load(
		string $template
	):array;

	/**
	 * Set the path of a template to read result fields from.
	 */
	abstract public function setTemplate(
		string $event, 
		string $template, 
		bool $overwriteExistingData = true
	);

	/**
	 * Set multiple templates to read result fields from.
	 */
	abstract public function setTemplates(
		array $templateMap, 
		bool $overwriteExistingData = true
	);

	/**
	 * Add required fields to variation search requests.
	 */
	abstract public function requireFields(
		 $event, 
		 $field = null
	);

}
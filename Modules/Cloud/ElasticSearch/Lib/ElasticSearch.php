<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib;


/**
 * elastic search constants
 */
abstract class ElasticSearch 
{

	const SORTING_ORDER_DESC = 'desc';

	const SORTING_ORDER_ASC = 'asc';

	const SEARCH_TYPE_EXACT = 'exact';

	const SEARCH_TYPE_FUZZY = 'fuzzy';

	const SEARCH_TYPE_LIKE = 'like';

	const SEARCH_TYPE_AUTOCOMPLETE = 'autocomplete';

	const RANGE_OPERATOR_LT = 'lt';

	const RANGE_OPERATOR_LTE = 'lte';

	const RANGE_OPERATOR_GT = 'gt';

	const OR_OPERATOR = 'or';

	const AND_OPERATOR = 'and';

	const RANGE_OPERATOR_GTE = 'gte';

	const DOMAIN_VARIATION = 'variation';

	const DOMAIN_CONTACT = 'contact';

	const DOMAIN_CONTACT_7 = 'contact7';

	const DOMAIN_ORDER = 'order';

	const DOMAIN_LOG = 'log';

	const DOMAIN_LOG_NG = 'log_ng';

	const DOMAIN_LOG_CRON = 'logCron';

	const DOMAIN_PLUGIN_LOG = 'plugin_log';

	abstract public static function getKeyByLanguage(
		string $language
	):string;

}
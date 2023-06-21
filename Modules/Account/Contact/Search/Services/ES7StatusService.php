<?php
namespace Plenty\Modules\Account\Contact\Search\Services;

use Plenty\Modules\Account\Contact\Search7\Services\ES7StatusService as ES7StatusServiceNew;

/**
 * Elastic Search 7 status checker service
 */
abstract class ES7StatusService 
{

	abstract public static function isHostSet(
	);

	abstract public static function isIndexFilled(
	);

	abstract public static function isIndexAvailable(
	);

}
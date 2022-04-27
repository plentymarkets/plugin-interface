<?php
namespace Plenty\Modules\Account\Contact\Search7\Services;

use Plenty\Modules\Account\Contact\Search7\Index\ContactIndex;

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

	abstract public static function isIndexReadyToBeUsed(
	);

}
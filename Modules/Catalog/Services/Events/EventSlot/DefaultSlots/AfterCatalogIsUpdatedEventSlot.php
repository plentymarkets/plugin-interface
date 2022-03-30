<?php
namespace Plenty\Modules\Catalog\Services\Events\EventSlot\DefaultSlots;

use Plenty\Modules\Catalog\Contracts\Events\EventSlotContract;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\EventSlot\EventSlot;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;

/**
 * After catalog is updated
 */
abstract class AfterCatalogIsUpdatedEventSlot implements EventSlotContract

{

	const KEY = 'after_catalog_is_updated';

	const DATA_OLD_CATALOG = 'oldCatalog';

	const DATA_NEW_CATALOG = 'newCatalog';

	abstract public function getKey(
	):string;

	/**
	 * Add hook to event slot
	 */
	abstract public function add(
		Hook $hook, 
		string $template
	):EventSlot;

}
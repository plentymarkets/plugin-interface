<?php
namespace Plenty\Modules\Catalog\Services\Events\EventSlot;

use Exception;
use Illuminate\Support\Arr;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Catalog\Contracts\Events\EventSlotContract;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Services\Events\Hook\Hook;
use Throwable;

/**
 * Event slot
 */
abstract class EventSlot implements EventSlotContract

{

	/**
	 * Add hook to event slot
	 */
	abstract public function add(
		Hook $hook, 
		string $template
	):EventSlot;

}
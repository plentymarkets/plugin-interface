<?php
namespace Plenty\Modules\Item\Stock\Hooks;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Basket\Events\BasketItem\BasketItemEvent;
use Plenty\Modules\Basket\Exceptions\BasketItemCheckException;
use Plenty\Modules\Basket\Models\BasketItem;
use Plenty\Modules\Basket\Repositories\BasketItemRepository;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Modules\Item\DataLayer\Models\Record;
use Plenty\Modules\Item\DataLayer\Models\RecordList;
use Plenty\Modules\Item\Stock\Contracts\BasketReservationContract;
use Plenty\Modules\Item\Stock\Events\BasketItemWarnOversell;
use Plenty\Modules\Order\Contracts\InternalOrderRepositoryContract;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;
use Plenty\Modules\Order\Repositories\Helper\OrderPaymentHelper;
use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\System\Module\Contracts\PlentyModuleRepositoryContract;

/**
 * CheckItemStock
 */
abstract class CheckItemStock 
{

	abstract public function handle(
		BasketItemEvent $basketItemEvent
	);

	/**
	 * Check the quantity of the same variation in other basket items.
	 */
	abstract public function getQuantityForItem(
		BasketItem $basketItem
	);

}
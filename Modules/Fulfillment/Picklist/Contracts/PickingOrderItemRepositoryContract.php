<?php
namespace Plenty\Modules\Fulfillment\Picklist\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Fulfillment\Picklist\Models\PickingOrderItem;

/**
 * The PickingOrderItemRepositoryContract describes methods for fetching one or multiple picking order items.
 */
interface PickingOrderItemRepositoryContract 
{

	public function getAll(
	):Collection;

	public function getPickingOrderItemById(
		int $pickingOrderItemId
	):PickingOrderItem;

	public function setPickingOrderItemState(
		int $pickingOrderItemId, 
		string $state
	):PickingOrderItem;

}
<?php
namespace Plenty\Modules\Order\Property\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Order\Property\Models\OrderProperty;
use Plenty\Modules\Order\Property\Models\OrderPropertyType;

/**
 * The OrderPropertyRepositoryContract contains the functionality to get, list, create, update and delete  OrderPropertyTypes and OrderProperties as well as OrderProperties. Order properties contain information that are additional to an order. Each property has a type and each type can have several names, but only one name per language. An order can only have one property of each property type.
 */
interface OrderPropertyRepositoryContract 
{

	/**
	 * Create an order property
	 */
	public function create(
		array $data = []
	):OrderProperty;

	/**
	 * Update an order property
	 */
	public function update(
		array $data, 
		int $orderPropertyId = null
	):OrderProperty;

	/**
	 * Deletes an order property. The ID of the order property must be specified.
	 */
	public function delete(
		 $data = []
	):bool;

	/**
	 * List order properties of an order
	 */
	public function findByOrderId(
		int $orderId, 
		int $typeId = null
	);

	/**
	 * Get a property type
	 */
	public function getType(
		int $typeId, 
		array $languages = []
	):OrderPropertyType;

	/**
	 * List order property types
	 */
	public function getTypes(
		array $languages = []
	);

	/**
	 * Create an order property type
	 */
	public function createType(
		array $data = []
	):OrderPropertyType;

	/**
	 * Update an order property type
	 */
	public function updateType(
		array $data = [], 
		int $id = null
	):OrderPropertyType;

	/**
	 * Delete an order property type
	 */
	public function deleteType(
		int $id
	):bool;

}
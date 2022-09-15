<?php
namespace Plenty\Modules\Order\Property\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelAlreadyExistsException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Order\Property\Models\OrderItemProperty;

/**
 * The OrderItemPropertyRepositoryContract contains the functionality to find, create, update and delete OrderItemProperty instances.
 */
interface OrderItemPropertyRepositoryContract 
{

	/**
	 * Find an order item property by its ID.
	 */
	public function find(
		int $id
	):OrderItemProperty;

	/**
	 * Create an order item property
	 */
	public function create(
		array $data = []
	):OrderItemProperty;

	/**
	 * Update an order item property
	 */
	public function update(
		array $data, 
		int $id
	):OrderItemProperty;

	/**
	 * Create or update an order item property
	 */
	public function save(
		array $data = []
	):OrderItemProperty;

	/**
	 * Delete an order item property
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Get an order item property by an order item ID and an order property type ID.
	 */
	public function findByOrderItemIdAndTypeId(
		int $orderItemId, 
		int $typeId
	):OrderItemProperty;

	/**
	 * Create an order item property by an order item ID and an order property type ID.
	 */
	public function createByOrderItemIdAndTypeId(
		array $data, 
		int $orderItemId, 
		int $typeId
	):OrderItemProperty;

	/**
	 * Update an order item property by an order item ID and an order property type ID.
	 */
	public function updateByOrderItemIdAndTypeId(
		array $data, 
		int $orderItemId, 
		int $typeId
	):OrderItemProperty;

	/**
	 * Delete an order item property by an order item ID and an order property type ID.
	 */
	public function deleteByOrderItemIdAndTypeId(
		int $orderItemId, 
		int $typeId
	):bool;

	/**
	 * List order item properties of an order item.
	 */
	public function findByOrderItemId(
		int $orderItemId
	):array;

}
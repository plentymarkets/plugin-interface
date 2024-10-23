<?php
namespace Plenty\Modules\Order\Date\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Order\Date\Models\OrderDate;
use Plenty\Modules\Order\Date\Models\OrderDateType;
use Plenty\Modules\Order\Date\Models\OrderDateTypeName;

/**
 * The OrderDateRepositoryContract contains the functionality to find available OrderDateTypes with their names in a specific language. Furthermore it is possible to create new OrderDateTypes, to update or delete existing date types and to create date type names for a language.
 */
interface OrderDateRepositoryContract 
{

	/**
	 * List names of a date type
	 */
	public function findNamesByTypeId(
		int $typeId
	);

	/**
	 * Get a name of a date type
	 */
	public function findNameByTypeIdAndLang(
		int $typeId, 
		string $lang
	):OrderDateTypeName;

	/**
	 * List date types
	 */
	public function findTypes(
		array $languages = []
	);

	/**
	 * Get a date type
	 */
	public function findTypeById(
		int $typeId
	):OrderDateType;

	/**
	 * Create an order date
	 */
	public function create(
		array $data = []
	):OrderDate;

	/**
	 * Update a date
	 */
	public function update(
		array $data, 
		int $orderDateId
	):OrderDate;

	/**
	 * Create or update an order date
	 */
	public function save(
		array $data = []
	):OrderDate;

	/**
	 * Delete a date
	 */
	public function delete(
		int $orderDateId
	):bool;

	/**
	 * Delete an order date from an order by the type of the order date
	 */
	public function deleteByOrderIdAndType(
		int $orderId, 
		int $typeId
	);

	/**
	 * Get an order date from an order by the type of the order date
	 */
	public function findByOrderIdAndTypeId(
		int $orderId, 
		int $typeId
	):OrderDate;

	/**
	 * List order dates of an order
	 */
	public function findByOrderId(
		int $orderId
	);

	/**
	 * Create an order date type.
	 */
	public function createType(
		array $data
	):OrderDateType;

	/**
	 * Update an order date type.
	 */
	public function updateType(
		int $id, 
		array $data
	):OrderDateType;

	/**
	 * Delete an order date type.
	 */
	public function deleteType(
		int $id
	):bool;

}
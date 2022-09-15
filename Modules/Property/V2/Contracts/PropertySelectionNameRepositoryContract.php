<?php
namespace Plenty\Modules\Property\V2\Contracts;

use Plenty\Modules\Property\V2\Models\PropertySelectionName;

/**
 * This interface allows you to get, create, update and delete property selection names.
 */
interface PropertySelectionNameRepositoryContract 
{

	/**
	 * Gets a list of property selection names. The ID of the property selection must be specified.
	 */
	public function findBySelectionId(
		int $selectionId
	):array;

	/**
	 * Gets a property selection name. The ID of the property selection name must be specified.
	 */
	public function get(
		int $id
	):PropertySelectionName;

	/**
	 * Updates a property selection name. The ID of the property selection name must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):PropertySelectionName;

	/**
	 * Create a property selection name.
	 */
	public function create(
		array $data
	):PropertySelectionName;

	/**
	 * Deletes a property selection name. The ID of the property selection name must be specified.
	 */
	public function delete(
		int $id
	):bool;

}
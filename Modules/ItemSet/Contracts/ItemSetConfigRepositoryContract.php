<?php
namespace Plenty\Modules\ItemSet\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\ItemSet\Models\ItemSetConfig;
use Plenty\Modules\RestDocumentation\Annotations\Rest;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the item set configuration repository
 */
interface ItemSetConfigRepositoryContract 
{

	/**
	 * Gets an item set. The ID of the item set configuration must be specified.
	 */
	public function show(
		int $id
	):ItemSetConfig;

	/**
	 * Creates an item set configuration.
	 */
	public function create(
		array $data
	):ItemSetConfig;

	/**
	 * Updates an item set configuration. The ID of the item set configuration must be specified.
	 */
	public function update(
		int $id, 
		array $data
	):ItemSetConfig;

	/**
	 * Deletes an item set configuration. The ID of the item set configuration must be specified.
	 */
	public function delete(
		int $id
	):DeleteResponse;

	/**
	 * Gets the item set configuration of an item set.
	 */
	public function get(
		int $setId, 
		int $setConfigId
	):ItemSetConfig;

	/**
	 * Gets the item set configuration of an item set. The item ID of the set item must be specified.
	 */
	public function findBySetId(
		int $setId
	):ItemSetConfig;

	/**
	 * Trigger a sales price calculation for an item set
	 */
	public function calculateSetPrice(
		int $setId
	);

}
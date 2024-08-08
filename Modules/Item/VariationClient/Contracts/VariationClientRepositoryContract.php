<?php
namespace Plenty\Modules\Item\VariationClient\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Modules\Item\VariationClient\Models\VariationClient;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation client repository
 */
interface VariationClientRepositoryContract 
{

	/**
	 * Gets a client (store) linked to a variation.
	 */
	public function findOne(
		int $plentyId, 
		int $variationId
	):VariationClient;

	/**
	 * Creates a link between a variation and a client (store).
	 */
	public function create(
		array $data
	):VariationClient;

	/**
	 * Deletes the link between a variation and a client (store).
	 */
	public function delete(
		int $plentyId, 
		int $variationId
	):DeleteResponse;

	/**
	 * Lists the clients (stores) linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationClient;

	/**
	 * Lists the clients (stores) linked to a variation including inheritance information.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationClient;

}
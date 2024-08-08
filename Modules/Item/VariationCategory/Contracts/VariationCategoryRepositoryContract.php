<?php
namespace Plenty\Modules\Item\VariationCategory\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Plenty\Modules\Item\VariationCategory\Models\VariationCategory;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract for the variation category repository
 */
interface VariationCategoryRepositoryContract 
{

	/**
	 * Gets the link between a category and a variation.
	 */
	public function show(
		int $variationId, 
		int $categoryId
	):VariationCategory;

	/**
	 * Creates a link between a category and a variation.
	 */
	public function create(
		array $data
	):VariationCategory;

	/**
	 * Updates a link between a category and a variation.
	 */
	public function update(
		array $data, 
		int $variationId, 
		int $categoryId
	):VariationCategory;

	/**
	 * Deletes the link between a category and a variation.
	 */
	public function delete(
		int $variationId, 
		int $categoryId
	):DeleteResponse;

	/**
	 * Lists the categories linked to a variation.
	 */
	public function findByVariationId(
		int $variationId
	):VariationCategory;

	/**
	 * Lists the categories linked to a variation including inheritance information.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationCategory;

	/**
	 * Updates up to 50 links between variations and categories.
	 */
	public function updateBulk(
		array $data
	):Collection;

	/**
	 * Creates up to 50 links between variations and categories.
	 */
	public function createBulk(
		array $data
	):Collection;

}
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
	 * Gets the link between a category and a variation. The ID of the variation and the ID of the category must be specified.
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
	 * Updates a link between a category and a variation. The ID of the variation and the ID of the category must be specified.
	 */
	public function update(
		array $data, 
		int $variationId, 
		int $categoryId
	):VariationCategory;

	/**
	 * Deletes the link between a category and a variation. The ID of the variation and the ID of the category must be specified.
	 */
	public function delete(
		int $variationId, 
		int $categoryId
	):DeleteResponse;

	/**
	 * Lists the categories linked to a variation. The ID of the variation must be specified.
	 */
	public function findByVariationId(
		int $variationId
	):VariationCategory;

	/**
	 * Lists the categories linked to a variation including inheritance information. The ID of the variation must be specified.
	 */
	public function findByVariationIdWithInheritance(
		int $variationId
	):VariationCategory;

	/**
	 * Updates up to 50 links between variations and categories. The ID of the variations and the ID of the categories must be specified.
	 */
	public function updateBulk(
		array $data
	):Collection;

	/**
	 * Creates up to 50 links between variations and categories. The ID of the variations and the ID of the categories must be specified.
	 */
	public function createBulk(
		array $data
	):Collection;

}
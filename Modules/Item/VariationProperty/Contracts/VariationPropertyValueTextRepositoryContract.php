<?php
namespace Plenty\Modules\Item\VariationProperty\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Item\VariationProperty\Models\VariationPropertyValueText;
use Plenty\Repositories\Models\DeleteResponse;

/**
 * The contract of the variation property value text repository
 */
interface VariationPropertyValueTextRepositoryContract 
{

	/**
	 * Saves text for a specific property of the type Text in the specified language. The ID of the property value and the language must be specified.
	 */
	public function create(
		array $data
	):VariationPropertyValueText;

	/**
	 * Updates the text saved for a specific property of the type Text in the specified language. The ID of the property value and the language must be specified.
	 */
	public function update(
		int $valueId, 
		string $lang, 
		array $data
	):VariationPropertyValueText;

	/**
	 * Deletes the text saved for a specific property of the type Text in the specified language. The ID of the property value and the language must be specified.
	 */
	public function delete(
		int $valueId, 
		string $lang
	):DeleteResponse;

	/**
	 * Gets the text saved for a specific property of the type Text in the specified language. The ID of the property value and the language must be specified.
	 */
	public function show(
		int $valueId, 
		string $lang
	):VariationPropertyValueText;

	/**
	 * Gets the texts saved for a specific property of the type Text in all available languages. The ID of the property value must be specified.
	 */
	public function findByPropertyValue(
		int $valueId
	):array;

}
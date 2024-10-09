<?php
namespace Plenty\Modules\ShopBuilder\Factories;

use Plenty\Modules\ShopBuilder\Widgets\Helper\WidgetTypes;

/**
 * Factory to create widget data
 */
abstract class WidgetDataFactory 
{

	/**
	 * Create a new widget factory instance.
	 */
	abstract public static function make(
		string $identifier
	):WidgetDataFactory;

	/**
	 * Set a label for this widget. Will be translated.
	 */
	abstract public function withLabel(
		string $label
	):self;

	/**
	 * Set the url of a preview image for the widget.
	 */
	abstract public function withPreviewImageUrl(
		string $previewImageUrl
	):self;

	/**
	 * Set the type of the widget.
	 */
	abstract public function withType(
		 $type
	):self;

	/**
	 * Add a category for the widget. A widget might be assigned to multiple categories.
	 */
	abstract public function withCategory(
		string $category
	):self;

	/**
	 * Set the position of the widget.
	 */
	abstract public function withPosition(
		int $position
	):self;

	/**
	 * Limit the amount of times a widget can be placed on a content.
	 */
	abstract public function withMaxPerPage(
		int $maxPerPage
	):self;

	/**
	 * Limits the widget types that you can drop into this widget.
	 */
	abstract public function withAllowedNestingTypes(
		array $allowedTypes
	):self;

	/**
	 * Set the widget as deprecated.
	 */
	abstract public function withDeprecated(
	):self;

	/**
	 * List of keywords for the shopBuilder widget search
	 */
	abstract public function withSearchKeyWords(
		array $keywords
	):self;

	/**
	 * Get widget data.
	 */
	abstract public function toArray(
	):array;

}
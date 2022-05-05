<?php
namespace Plenty\Modules\Mail\Templates\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\ContentBuilder\Exceptions\ContentBuilderException;
use Plenty\Modules\ContentBuilder\Models\Widget;
use Plenty\Modules\ShopBuilder\Models\ContentWidgetPreview;

/**
 * Register mail builder widgets.
 */
interface MailTemplateWidgetRepositoryContract 
{

	/**
	 * Register a widget to be available in the mail builder.
	 */
	public function registerWidget(
		string $widgetClass
	);

	/**
	 * Override a widget class to extend data or settings of the widget.
	 */
	public function overrideWidget(
		string $widgetIdentifier, 
		string $overrideWidget
	);

}
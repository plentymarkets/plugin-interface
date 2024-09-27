<?php
namespace Plenty\Modules\ShopBuilder\Widgets;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\ShopBuilder\Contracts\DynamicWidget;
use Plenty\Plugin\Application;
use Plenty\Plugin\Templates\Twig;

/**
 * BaseWidget class for plentyShop LTS
 */
abstract class BaseWidget 
{

	const TOOLBAR_LAYOUT = ['','bold,italic,underline,strike|h1,h2,h3|align|translation','bold,italic,underline,strike|headline|link|align,ul,ol|color,background|translation'];

	abstract public function getData(
	);

	abstract public function getSettings(
	);

	/**
	 * Get the html representation of the widget.
	 */
	abstract public function getPreview(
		array $widgetSettings = [], 
		array $children = []
	):string;

	/**
	 * Render the template of the widget.
	 */
	abstract public function render(
		array $widgetSettings = [], 
		array $children = []
	):string;

}
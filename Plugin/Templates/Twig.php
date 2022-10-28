<?php
namespace Plenty\Plugin\Templates;

use Exception;
use InvalidArgumentException;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Webshop\Hooks\OverrideOrderConfirmation;
use RaiderBridge\Facade\Raider;
use Raider\Error\LoaderError;
use Throwable;
use Twig_ExtensionInterface;

/**
 * Twig engine
 */
abstract class Twig 
{

	/**
	 * Renders a template.
	 */
	abstract public function render(
		string $name, 
		array $context = []
	):string;

	/**
	 * Compile and render a twig template from a string.
	 */
	abstract public function renderString(
		string $templateContent, 
		array $context = []
	):string;

	/**
	 * Registers an extension.
	 */
	abstract public function addExtension(
		string $extension
	);

}
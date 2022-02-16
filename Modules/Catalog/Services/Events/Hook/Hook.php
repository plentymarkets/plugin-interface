<?php
namespace Plenty\Modules\Catalog\Services\Events\Hook;

use Exception;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Catalog\Models\Catalog;
use Plenty\Modules\Catalog\Templates\Template;

/**
 * Hook abstract base
 */
abstract class Hook 
{

	/**
	 * Handles the hook action
	 */
	abstract public function handle(
		array $data
	);

	/**
	 * Handles the actions if method handle fails
	 */
	abstract public function failureHandle(
		\Exception $exception, 
		array $data
	);

	/**
	 * Checks if hook should run
	 */
	abstract public function shouldRun(
	):bool;

	/**
	 * Gets the catalog
	 */
	abstract public function getCatalog(
	):Catalog;

	/**
	 * Gets template
	 */
	abstract public function getTemplate(
	):Template;

}
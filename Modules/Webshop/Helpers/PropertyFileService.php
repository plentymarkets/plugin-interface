<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Plugin\Application;

/**
 * Helper class for variation properties of type file.
 */
abstract class PropertyFileService 
{

	/**
	 * Get the URL where file properties are stored
	 */
	abstract public function getPropertyFileUrl(
	):string;

}
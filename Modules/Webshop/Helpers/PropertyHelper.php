<?php
namespace Plenty\Modules\Webshop\Helpers;

use Plenty\Modules\Core\Data\Factories\LazyLoaderFactory;
use Plenty\Modules\Property\V2\Models\Property;

/**
 * A helper class that lazyloads a property by the given property id.
 */
abstract class PropertyHelper 
{

	abstract public static function getPropertyById(
		int $propertyId
	):array;

}
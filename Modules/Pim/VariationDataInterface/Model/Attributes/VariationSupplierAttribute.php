<?php
namespace Plenty\Modules\Pim\VariationDataInterface\Model\Attributes;

use Exception;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Pim\VariationDataInterface\Contracts\AttributeInterface;
use Plenty\Modules\Pim\VariationDataInterface\Model\VariationDataInterfaceContext;

/**
 * The supplier part of the variation
 */
abstract class VariationSupplierAttribute 
{

	const SUPPLIER = 'Plenty\Modules\Account\Contact\Models\Contact';

	const PRIMARY_KEY = 'variationId';

	/**
	 * Get the related key on the variation model.
	 */
	abstract public static function getVariationAttribute(
	):string;

	abstract public function getName(
	):string;

	abstract public function addLazyLoadParts(
		 $lazyLoadParts
	);

	abstract public function getLazyLoadParts(
	):array;

}
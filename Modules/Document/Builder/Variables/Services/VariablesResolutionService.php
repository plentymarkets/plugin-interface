<?php
namespace Plenty\Modules\Document\Builder\Variables\Services;

use Exception;
use Illuminate\Pipeline\Pipeline;
use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Account\Contact\Models\Contact;
use Plenty\Modules\Document\Builder\Variables\Contracts\DocumentBuilderVariablesContainerContract;
use Plenty\Modules\Document\Builder\Variables\Enums\VariablesObjectTypeEnum;
use Plenty\Modules\Document\Builder\Variables\Models\Context\ObjectEntry;
use Plenty\Modules\Document\Builder\Variables\Models\Context\VariablesContext;
use Plenty\Modules\Document\Builder\Variables\Models\Context\VariablesResolution;
use Plenty\Modules\Document\Builder\Variables\Models\VariableGroup;
use Plenty\Modules\Document\Builder\Variables\Models\VariableGroupContainer;
use Plenty\Modules\Document\Generation\Helper\VariationSalesPriceSearchHelper;
use Plenty\Modules\Document\Models\Document;
use Plenty\Modules\Document\TemplateSetting\Models\DocumentTemplateSetting;
use Plenty\Modules\Order\Models\Order;

/**
 * The service for variables resolution
 */
abstract class VariablesResolutionService 
{

	/**
	 * Set the language to be used by the variables resolution.
	 */
	abstract public function setLanguage(
		string $language
	):self;

	/**
	 * Set the order into the variables context
	 */
	abstract public function setOrder(
		Order $order
	):self;

	/**
	 * Set the document into the variables context
	 */
	abstract public function setDocument(
		Document $document
	):self;

	/**
	 * Set the contact into the variables context
	 */
	abstract public function setContact(
		Contact $contact
	):self;

	/**
	 * Set an object into the variables context.
	 */
	abstract public function setObject(
		string $typeEnum, 
		 $object
	):self;

}
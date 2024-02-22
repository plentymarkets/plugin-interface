<?php
namespace Plenty\Modules\Document\Generation\Contracts;

use Closure;
use Plenty\Modules\Document\Generation\Exceptions\DocumentBuilderGenerationRestrictionException;
use Plenty\Modules\Order\Models\Order;

/**
 * A container service for DocumentBuilder document generation restrictions registration
 */
interface DocumentBuilderGenerationRestrictionContainerContract 
{

	/**
	 * Register a document generation restriction.
	 */
	public function registerGenerationRestriction(
		\Closure $restriction, 
		 $descriptions
	);

	/**
	 * Check for restrictions of the generation of the given document type for the given order.
	 */
	public function checkGenerationRestrictions(
		Order $order, 
		string $documentType
	);

}
<?php
namespace Plenty\Modules\Document\Builder\Variables\Events;


/**
 * An event class, which will be triggered, when the DocumentBuilder variables are registered.
 */
abstract class DocumentBuilderVariablesRegistering 
{

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
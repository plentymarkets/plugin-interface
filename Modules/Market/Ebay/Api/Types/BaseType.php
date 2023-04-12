<?php
namespace Plenty\Modules\Market\Ebay\Api\Types;

use Plenty\Log\Traits\Loggable;
use Plenty\Modules\Market\Ebay\Api\Exceptions;
use Plenty\Modules\Market\Ebay\Api\Types;
use Plenty\Modules\Market\MarketLogIdentifier;

/**
 * The service for base type.
 */
abstract class BaseType 
{
	
protected static 		$properties;
	
protected static 		$xmlNamespaces;
	
protected static 		$requestXmlRootElementNames;
	
	public function __construct(
		array $values = []
	)
	{
		//proxy method
	}

	/**
	 * PHP magic function that is called when getting a property.
	 */
	public function __get(
		string $name
	)
	{
		return null;
	}

	/**
	 * PHP magic function that is called when setting a property.
	 */
	public function __set(
		string $name, 
		 $value
	)
	{
		return null;
	}

	/**
	 * PHP magic function that is called to determine if a property is set.
	 */
	public function __isset(
		string $name
	):bool
	{
		return null;
	}

	/**
	 * PHP magic function that is called to unset a property.
	 */
	public function __unset(
		string $name
	)
	{
		return null;
	}

	/**
	 * Converts the object to a XML request string.
	 */
	public function toRequestXml(
	):string
	{
		return null;
	}

	/**
	 * Returns the meta data for a property.
	 */
	public function elementMeta(
		string $elementName
	)
	{
		return null;
	}

	/**
	 * Method to get or set the object's attachment. Overrides any existing attachment is setting.
	 */
	public function attachment(
		 $data = null, 
		string $mimeType = "application/octet-stream"
	)
	{
		return null;
	}

	/**
	 * Helper method to check if an object has an attachment.
	 */
	public function hasAttachment(
	):bool
	{
		return null;
	}

	/**
	 * Helper method that returns an associative array of the object's properties and values.
	 */
	public function toArray(
	):array
	{
		return null;
	}

	/**
	 * Assign multiple values to an object.
	 */
	public function search(
		string $expression
	)
	{
		return null;
	}

	/**
	 * Assign multiple values to an object.
	 */
	public function setValues(
		string $class, 
		array $values = []
	)
	{
		return null;
	}

	/**
	 * Helper function to remove the properties and values that belong to a object's parent.
	 */
	public static function getParentValues(
		array $properties, 
		array $values
	):array
	{
		return null;
	}

}
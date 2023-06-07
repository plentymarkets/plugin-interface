<?php
namespace Plenty\Modules\Market\Ebay\Api\Types;

use Plenty\Modules\Market\Ebay\Api\Exceptions;
use Plenty\Modules\Market\Ebay\Api\Helpers\Helper;
use Plenty\Modules\Market\Ebay\Api\JmesPath\JmesPathableArrayInterface;

/**
 * The service for repeatable type.
 */
abstract class RepeatableType 
{

	public function __construct(
		string $class, 
		string $property, 
		string $expectedType
	)
	{
		//proxy method
	}

	/**
	 * Determines if the offset exists in the array.
	 */
	public function offsetExists(
		int $offset
	):bool
	{
		return null;
	}

	/**
	 * Returns the value of the given offset.
	 */
	public function offsetGet(
		int $offset
	)
	{
		return null;
	}

	/**
	 * Sets a value for the given offset.
	 */
	public function offsetSet(
		 $offset, 
		 $value
	)
	{
		return null;
	}

	/**
	 * Unsets the value of the given offset.
	 */
	public function offsetUnset(
		int $offset
	)
	{
		return null;
	}

	public function count(
	):int
	{
		return null;
	}

	public function current(
	)
	{
		return null;
	}

	public function key(
	):int
	{
		return null;
	}

	/**
	 * Move onto the next array index.
	 */
	public function next(
	)
	{
		return null;
	}

	/**
	 * Reset the array index to the start of the array.
	 */
	public function rewind(
	)
	{
		return null;
	}

	public function valid(
	):bool
	{
		return null;
	}

}
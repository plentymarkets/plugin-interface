<?php
namespace Plenty\Plugin;


/**
 * configuration repository
 */
abstract class ConfigRepository 
{

	/**
	 * Determine if the given configuration value exists.
	 */
	abstract public function has(
		string $key
	):bool;

	/**
	 * Get the specified configuration value.
	 */
	abstract public function get(
		string $key, 
		 $default = null
	);

	/**
	 * Set a given configuration value.
	 */
	abstract public function set(
		string $key, 
		 $value = null
	);

	/**
	 * Prepend a value onto an array configuration value.
	 */
	abstract public function prepend(
		string $key, 
		 $value
	);

	/**
	 * Push a value onto an array configuration value.
	 */
	abstract public function push(
		string $key, 
		 $value
	);

	abstract public static function getPrefix(
	):string;

}
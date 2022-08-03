<?php
namespace Plenty\Modules\Catalog\Services\Cache\Intervals;

use Exception;
use Plenty\Modules\Catalog\Helpers\Throwables\CatalogThrowables;
use Plenty\Modules\Catalog\Services\Cache\Intervals\Models\Frequency;
use Plenty\Modules\Catalog\Services\Cache\Intervals\Models\Interval;

/**
 * Intervals container
 */
abstract class Intervals 
{

	/**
	 * Adds interval
	 */
	abstract public function addInterval(
		int $intervalId
	):self;

	abstract public function addFrequency(
		 $frequency
	);

	/**
	 * Returns all intervals
	 */
	abstract public function getIntervals(
	):array;

	/**
	 * Returns all frequency
	 */
	abstract public function getFrequencies(
	):array;

	/**
	 * Get the instance as an array.
	 */
	abstract public function toArray(
	):array;

}
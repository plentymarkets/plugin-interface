<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type;

use Illuminate\Contracts\Support\Arrayable;

/**
 * to be written
 */
interface TypeInterface 
{

	/**
	 * Get the instance as an array.
	 */
	public function toArray(
	):array;

}
<?php
namespace Plenty\Modules\Cloud\ElasticSearch\Lib\Sorting;

use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;

/**
 * To be written
 */
abstract class MultipleSorting implements SortingInterface

{

	abstract public function addSorting(
		SortingInterface $sorting
	);

	abstract public function add(
		string $path, 
		string $order = \Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch::SORTING_ORDER_ASC, 
		string $nestedPath = null
	);

	abstract public function toArray(
	):array;

}
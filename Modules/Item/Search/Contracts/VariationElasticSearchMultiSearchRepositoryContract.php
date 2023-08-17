<?php
namespace Plenty\Modules\Item\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchMultiSearchRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;

/**
 * deprecated
 */
interface VariationElasticSearchMultiSearchRepositoryContract 
{

	public function setIndex(
		IndexInterface $index
	):ElasticSearchMultiSearchRepositoryContract;

	public function addSearch(
		 $search
	):ElasticSearchMultiSearchRepositoryContract;

	public function execute(
	):array;

}
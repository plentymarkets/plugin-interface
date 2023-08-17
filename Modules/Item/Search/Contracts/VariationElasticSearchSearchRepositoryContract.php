<?php
namespace Plenty\Modules\Item\Search\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchSearchRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;

/**
 * deprecated
 */
interface VariationElasticSearchSearchRepositoryContract 
{

	public function execute(
	):array;

	public function setIndex(
		IndexInterface $index
	):ElasticSearchSearchRepositoryContract;

	public function addSearch(
		 $search
	):ElasticSearchSearchRepositoryContract;

}
<?php
namespace Plenty\Modules\Account\Contact\Search7\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchScrollRepositoryContract;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Index\IndexInterface;

/**
 * kommt noch
 */
interface ContactElasticSearchScrollRepositoryContract 
{

	public function hasNext(
	):bool;

	public function setNumberOfDocumentsPerShard(
		int $size
	);

	public function clear(
	);

	public function setIndex(
		IndexInterface $index
	):ElasticSearchSearchRepositoryContract;

	public function addSearch(
		 $search
	):ElasticSearchSearchRepositoryContract;

	public function execute(
	):array;

}
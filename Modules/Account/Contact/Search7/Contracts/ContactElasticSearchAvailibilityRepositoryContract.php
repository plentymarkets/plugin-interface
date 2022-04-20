<?php
namespace Plenty\Modules\Account\Contact\Search7\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Contracts\ElasticSearchAvailabilityRepositoryContract;

/**
 * ContactElasticSearchAvailibilityRepositoryContract
 */
interface ContactElasticSearchAvailibilityRepositoryContract 
{

	public function isReady(
	):bool;

	public function isAvailable(
	):bool;

}
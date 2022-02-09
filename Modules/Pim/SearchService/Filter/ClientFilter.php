<?php
namespace Plenty\Modules\Pim\SearchService\Filter;

use Illuminate\Contracts\Support\Arrayable;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\Filter\TermsFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Statement\StatementInterface;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolMustNotFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\Filter\BoolShouldFilter;
use Plenty\Modules\Cloud\ElasticSearch\Lib\Query\Type\TypeInterface;

/**
 * Includes filters for clients
 */
abstract class ClientFilter implements TypeInterface

{

	/**
	 * Restricts the result to have the clientId.
	 */
	abstract public function isVisibleForClient(
		int $clientId
	):self;

	/**
	 * Restricts the result to have any of the clientIds.
	 */
	abstract public function isVisibleForAtLeastOneClient(
		array $clientIds
	):self;

	/**
	 * Restricts the result to have all of the clientIds.
	 */
	abstract public function isVisibleForAllClients(
		array $clientIds
	):self;

	/**
	 * Restricts the result to have any of the automaticClientVisibilities. (-1, 0, 1, 2)
	 */
	abstract public function hasAutomaticClientVisibility(
		array $values
	):self;

	/**
	 * Restricts the result to not match the specified IDs.
	 */
	abstract public function hasNotClientIds(
		array $clientIds
	):self;

	abstract public function toArray(
	):array;

	abstract public function addStatement(
		StatementInterface $statement
	);

	abstract public function addQuery(
		 $statement
	);

}
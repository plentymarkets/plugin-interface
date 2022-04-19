<?php
namespace Plenty\Modules\Account\Contact\Search7\Contracts;

use Plenty\Modules\Cloud\ElasticSearch\Lib\Output\OutputInterface;

/**
 * The contract for the search repository
 */
interface IndexContactRepositoryContract 
{

	/**
	 * Index a contact
	 */
	public function index(
		int $contactId
	):array;

	/**
	 * Delete contact from index
	 */
	public function delete(
		array $contactIds
	):array;

	public function bulk(
		array $contactIds
	):array;

	public function setOutput(
		OutputInterface $output
	);

	public function execute(
	);

	public function getElasticSearchVersion(
	):float;

}
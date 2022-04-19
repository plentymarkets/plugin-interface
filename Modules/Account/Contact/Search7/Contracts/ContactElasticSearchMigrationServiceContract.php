<?php
namespace Plenty\Modules\Account\Contact\Search7\Contracts;


/**
 * Elastic Search 7 migration service
 */
interface ContactElasticSearchMigrationServiceContract 
{

	public function isActive(
	);

	public function activate(
	);

	public function deactivate(
	);

	public function setContactLastId(
		 $lastId
	);

	public function getContactLastId(
	);

	public function setAddressPomLastId(
		 $lastId
	);

	public function setAddressPosLastId(
		 $lastId
	);

	public function getAddressPomLastId(
	);

	public function getAddressPosLastId(
	);

}
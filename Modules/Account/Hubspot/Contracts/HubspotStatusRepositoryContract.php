<?php
namespace Plenty\Modules\Account\Hubspot\Contracts;


/**
 * The HubspotStatusRepositoryContract is the interface for the hubspotStatus repository.
 * This interface allows to list, get, create hubspotStatus.
 */
interface HubspotStatusRepositoryContract 
{

	/**
	 * Adds a new hubspotStatus entry
	 */
	public function saveHubspotStatus(
		array $data
	):bool;

}
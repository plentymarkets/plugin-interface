<?php
namespace Plenty\Modules\Account\Hubspot\Models;


/**
 * The hubspot status model.
 */
abstract class HubspotStatus 
{

	const HUBSPOT_STATUS_OPERATION_CREATE_PLENTY_CONTACT = 'create_plenty_contact';

	const HUBSPOT_STATUS_OPERATION_UPDATE_PLENTY_CONTACT = 'update_plenty_contact';

	const HUBSPOT_STATUS_OPERATION_CREATE_PLENTY_CONTACT_ADDRESS = 'create_plenty_contact_address';

	const HUBSPOT_STATUS_OPERATION_UPDATE_PLENTY_CONTACT_ADDRESS = 'update_plenty_contact_address';

	const HUBSPOT_STATUS_OPERATION_CREATE_PLENTY_COMPANY = 'create_plenty_company';

	const HUBSPOT_STATUS_OPERATION_UPDATE_PLENTY_COMPANY = 'update_plenty_company';

	const HUBSPOT_STATUS_OPERATION_CREATE_PLENTY_CONTACT_COMPANY_RELATION = 'create_plenty_contact_company_relation';

	const HUBSPOT_STATUS_OPERATION_UPDATE_PLENTY_CONTACT_COMPANY_RELATION = 'update_plenty_contact_company_relation';

	const HUBSPOT_STATUS_OPERATION_CREATE_HUBSPOT_CONTACT = 'create_hubspot_contact';

	const HUBSPOT_STATUS_OPERATION_UPDATE_HUBSPOT_CONTACT = 'update_hubspot_contact';

	const HUBSPOT_STATUS_OPERATION_CREATE_HUBSPOT_COMPANY = 'create_hubspot_company';

	const HUBSPOT_STATUS_OPERATION_UPDATE_HUBSPOT_COMPANY = 'update_hubspot_company';

	const HUBSPOT_STATUS_OPERATION_CREATE_HUBSPOT_CONTACT_COMPANY_RELATION = 'create_hubspot_contact_company_relation';

	const ALL_HUBSPOT_STATUS_OPERATIONS = ['create_plenty_contact','update_plenty_contact','create_plenty_contact_address','update_plenty_contact_address','create_plenty_company','update_plenty_company','create_plenty_contact_company_relation','update_plenty_contact_company_relation','create_hubspot_contact','update_hubspot_contact','create_hubspot_company','update_hubspot_company','create_hubspot_contact_company_relation'];

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$createdAt;
	
public		$updatedAt;
	
public		$plentyContactId;
	
public		$hubspotContactId;
	
public		$plentyCompanyId;
	
public		$hubspotCompanyId;
	
public		$operation;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
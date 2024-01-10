<?php
namespace Plenty\Modules\Market\Credentials\Models;


/**
 * The credentials model
 */
abstract class Credentials 
{

	const MAX_ITEMS_PER_PAGE = 50;

	const ENVIRONMENT_SANDBOX = 'sandbox';

	const ENVIRONMENT_PRODUCTION = 'production';

	const STATUS_ACTIVE = 'active';

	const STATUS_INACTIVE = 'inactive';

	const STATUS_PENDING = 'pending';

	const CREDENTIALS_EBAY_AUTH_TYPE_OAUTH2 = 'oauth2';

	const CREDENTIALS_EBAY_AUTH_TYPE_AUTH_N_AUTH = 'auth_n_auth';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$environment;
	
public		$status;
	
public		$data;
	
public		$market;
	
public		$createdAt;
	
public		$updatedAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
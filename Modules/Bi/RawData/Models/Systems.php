<?php
namespace Plenty\Modules\BI\RawData\Models;


/**
 * The BI Systems model
 */
abstract class Systems 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$plenty_id;
	
public		$plenty_id_hash;
	
public		$cloud_id;
	
public		$ac_id;
	
public		$sys_domain;
	
public		$sys_parent_plenty_id;
	
public		$sys_delete_status;
	
public		$sys_version;
	
public		$sys_installed_at;
	
public		$row_inserted_at;
	
public		$sys_edition;
	
public		$plenty_id_string;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
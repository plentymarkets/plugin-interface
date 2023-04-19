<?php
namespace Plenty\Modules\Authorization\Models;


/**
 * The Role authentication model
 */
abstract class Role 
{

	const DEFAULT_ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$name;
	
public		$holdParents;
	
public		$hidden;
	
public		$uuid;
	
public		$private_user_id;
	
public		$users;
	
public		$permissions;
	
public		$permissionKeys;
	
public		$isLinkedWithUsers;
	
public		$accessControl;
	
public		$resourceAccess;
	
public		$visibilities;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
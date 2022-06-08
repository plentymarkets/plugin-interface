<?php
namespace Plenty\Modules\Authentication\Models;


/**
 * The user authentication model
 */
abstract class User 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$userId;
	
public		$pwd;
	
public		$pwd_md5;
	
public		$email;
	
public		$emailHash;
	
public		$timezone;
	
public		$ticket;
	
public		$password;
	
public		$user;
	
public		$username;
	
public		$real_name;
	
public		$lang;
	
public		$userClass;
	
public		$userRights;
	
public		$uiConfig;
	
public		$permissions;
	
public		$pluginPermissions;
	
public		$roles;
	
public		$accessControl;
	
public		$daysLeftToChangePassword;
	
public		$isSupportUser;
	
public		$oauthAccessTokensId;
	
public		$user_email;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
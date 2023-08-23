<?php
namespace Plenty\Modules\Authentication\Models;


/**
 * The user authentication model
 */
abstract class User 
{

	const PERMISSIONS_CACHE_PREFIX = 'permissionKeys_user_';

	const PERMISSIONS_CACHE_TTL = 345600;

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
	
public		$ipLimit;
	
public		$uiConfig;
	
public		$userType;
	
public		$permissions;
	
public		$pluginPermissions;
	
public		$visibilities;
	
public		$permissionKeys;
	
public		$roles;
	
public		$accessControl;
	
public		$daysLeftToChangePassword;
	
public		$isSupportUser;
	
public		$oauthAccessTokensId;
	
public		$user_email;
	
public		$accountEmail;
	
public		$invitationStatus;
	
public		$loginType;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
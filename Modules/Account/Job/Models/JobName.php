<?php
namespace Plenty\Modules\Account\Job\Models;


/**
 * The job name model.
 */
abstract class JobName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$positionId;
	
public		$lang;
	
public		$name;
	
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
<?php
namespace Plenty\Modules\Account\Job\Models;


/**
 * The job model.
 */
abstract class Job 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$position;
	
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
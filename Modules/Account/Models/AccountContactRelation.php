<?php
namespace Plenty\Modules\Account\Models;


/**
 * account contact relation model
 */
abstract class AccountContactRelation 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$accountId;
	
public		$contactId;
	
public		$isPrimary;
	
public		$account;
	
public		$contact;
	
public		$accountContactSalesRepresentativeRelations;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
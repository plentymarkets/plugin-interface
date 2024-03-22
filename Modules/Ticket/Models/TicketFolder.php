<?php
namespace Plenty\Modules\Ticket\Models;


/**
 * The ticket type model.
 */
abstract class TicketFolder 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$parent_id;
	
public		$level;
	
public		$name;
	
public		$user_id;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
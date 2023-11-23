<?php
namespace Plenty\Modules\Order\CreditNoteReason\Models;


/**
 * The credit note reason model.
 */
abstract class CreditNoteReason 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$reason;
	
public		$names;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
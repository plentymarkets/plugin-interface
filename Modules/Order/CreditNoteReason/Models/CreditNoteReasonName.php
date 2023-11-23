<?php
namespace Plenty\Modules\Order\CreditNoteReason\Models;


/**
 * The credit note reason name model.
 */
abstract class CreditNoteReasonName 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$reason;
	
public		$lang;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
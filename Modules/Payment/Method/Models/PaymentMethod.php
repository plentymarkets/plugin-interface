<?php
namespace Plenty\Modules\Payment\Method\Models;


/**
 * The payment method model
 */
abstract class PaymentMethod 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$pluginKey;
	
public		$paymentKey;
	
public		$name;
	
public		$isDocumentBuilderActive;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
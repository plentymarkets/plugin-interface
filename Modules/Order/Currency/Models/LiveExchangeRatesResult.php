<?php
namespace Plenty\Modules\Order\Currency\Models;


/**
 * The live exchange rates result model.
 */
abstract class LiveExchangeRatesResult 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$baseCurrency;
	
public		$lastUpdate;
	
public		$exchangeRates;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Order\Offer\Settings\Models;


/**
 * The model of the offer settings.
 */
abstract class OfferSettings 
{

	const DEFAULT_VALUE = 'defaultValue';

	const VALUE_IS_NULLABLE = 'valueIsNullable';

	const DIVERGENT_DB_KEY = 'divergentDBKey';

	const LOAD_OPTION_FIELD_SEPARATELY = 'loadOptionFieldSeparately';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$validDays;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
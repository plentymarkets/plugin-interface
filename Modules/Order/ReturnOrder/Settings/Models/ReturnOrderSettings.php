<?php
namespace Plenty\Modules\Order\ReturnOrder\Settings\Models;


/**
 * The model of the return order settings.
 */
abstract class ReturnOrderSettings 
{

	const DEFAULT_VALUE = 'defaultValue';

	const VALUE_IS_NULLABLE = 'valueIsNullable';

	const DIVERGENT_DB_KEY = 'divergentDBKey';

	const LOAD_OPTION_FIELD_SEPARATELY = 'loadOptionFieldSeparately';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$defaultStatusId;
	
public		$defaultOrderStatus;
	
public		$;
	
public		$;
	
public		$setShippingCostsToZero;
	
public		$copyShippingCostsFromOriginOrder;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
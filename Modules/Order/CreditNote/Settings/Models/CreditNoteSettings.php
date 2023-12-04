<?php
namespace Plenty\Modules\Order\CreditNote\Settings\Models;


/**
 * The model of the creditNote order settings.
 */
abstract class CreditNoteSettings 
{

	const DEFAULT_VALUE = 'defaultValue';

	const VALUE_IS_NULLABLE = 'valueIsNullable';

	const DIVERGENT_DB_KEY = 'divergentDBKey';

	const LOAD_OPTION_FIELD_SEPARATELY = 'loadOptionFieldSeparately';

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$defaultStatusId;
	
public		$setShippingCostsToZero;
	
public		$validateQuantityFromParent;
	
public		$defaultOrderStatus;
	
public		$;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
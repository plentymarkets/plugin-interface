<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Variables\AddressGroup;


/**
 * The base class for all address variables
 */
abstract class AddressBaseVariable 
{

	const MANUAL_URL = ['https://knowledge.plentymarkets.com/de-de/manual/main/auftraege/documentbuilder-variablen-verwenden.html','https://knowledge.plentymarkets.com/en-gb/manual/main/orders/documentbuilder-using-variables.html'];

	const OPERATOR_EQUALS = 'EQUAL';

	const OPERATOR_NOT = 'NOT';

	const OPERATOR_LOWER_THAN = 'LT';

	const OPERATOR_LOWER_THAN_OR_EQUALS = 'LOE';

	const OPERATOR_GREATER_THAN = 'GT';

	const OPERATOR_GREATER_THAN_OR_EQUALS = 'GOE';

	const OPERATOR_IN = 'IN';

	const OPERATOR_NOT_IN = 'NIN';

	const OPERATOR_BETWEEN = 'BETWEEN';

	const OPERATOR_EXIST = 'EXIST';

	const OPERATOR_NOT_EXIST = 'NOT_EXIST';

	const RESTRICTION_TYPE_INPUT = 'Plenty\Modules\Flow\DataModels\ConfigForm\InputField';

	const RESTRICTION_TYPE_NUMBER = 'Plenty\Modules\Flow\DataModels\ConfigForm\NumberField';

	const RESTRICTION_TYPE_CHECKBOX = 'Plenty\Modules\Flow\DataModels\ConfigForm\CheckboxField';

	const RESTRICTION_TYPE_CHECK_BOX_GROUP = 'Plenty\Modules\Flow\DataModels\ConfigForm\CheckboxGroupField';

	const RESTRICTION_TYPE_SELECTBOX = 'Plenty\Modules\Flow\DataModels\ConfigForm\SelectboxField';

	const RESTRICTION_TYPE_NONE = 'Plenty\Modules\Flow\DataModels\ConfigForm\InputField';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
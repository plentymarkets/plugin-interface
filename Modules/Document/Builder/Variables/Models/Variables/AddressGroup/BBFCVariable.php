<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Variables\AddressGroup;


/**
 * The BBFC address option variable
 */
abstract class BBFCVariable 
{

	const IDENTIFIER = 'BBFC';

	const MANUAL_URL = ['https://knowledge.plentymarkets.com/de-de/manual/main/auftraege/documentbuilder-variablen-verwenden.html','https://knowledge.plentymarkets.com/en-gb/manual/main/orders/documentbuilder-using-variables.html'];

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
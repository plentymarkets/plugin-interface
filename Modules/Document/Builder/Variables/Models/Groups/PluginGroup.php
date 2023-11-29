<?php
namespace Plenty\Modules\Document\Builder\Variables\Models\Groups;


/**
 * The Plugin variables group
 */
abstract class PluginGroup 
{

	const IDENTIFIER = 'Plugin';

	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Plugin\PluginSet\Models;


/**
 * Eloquent model representing a PluginSet.
 */
abstract class PluginSet 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$hash;
	
public		$parentPluginSetId;
	
public		$parentPluginSet;
	
public		$name;
	
public		$pluginSetEntries;
	
public		$pluginSetEntriesWithTrashed;
	
public		$layoutContainers;
	
public		$webstores;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
<?php
namespace Plenty\Modules\Plugin\PluginSet\Models;


/**
 * Eloquent model representing a PluginSetEntry.
 */
abstract class PluginSetEntry 
{

	const ITEMS_PER_PAGE = 50;

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	
public		$id;
	
public		$pluginId;
	
public		$pluginSetId;
	
public		$plugin;
	
public		$branchName;
	
public		$commit;
	
public		$position;
	
public		$isInstalledFromGit;
	
public		$lastCodeUpdateAt;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}
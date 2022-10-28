<?php
namespace Plenty\Modules\Plugin\PluginSet\Contracts;

use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSetEntry;

/**
 * get, create, update or delete plugin set entries
 */
interface PluginSetEntryRepositoryContract 
{

	/**
	 * Get a PluginSetEntry.
	 */
	public function get(
		 $idOrInstance
	):PluginSetEntry;

	/**
	 * Get a PluginSetEntry using a PluginSetId and PluginId
	 */
	public function getByPluginSetIdAndPluginId(
		int $pluginSetId, 
		int $pluginId
	):PluginSetEntry;

	/**
	 * Create a set entry.
	 */
	public function create(
		array $data
	):PluginSetEntry;

	/**
	 * Copy a PluginSetEntry to a PluginSet
	 */
	public function copyToPluginSet(
		 $pluginSetEntryOrId, 
		 $pluginSetOrId, 
		bool $copyConfigurations
	):PluginSetEntry;

	/**
	 * Update a PluginSetEntry. Associate a set entry with a new set, a new plugin, or both.
	 */
	public function update(
		int $id, 
		array $data
	):bool;

	/**
	 * Delete a PluginSetEntry
	 */
	public function delete(
		 $what
	):int;

}
<?php
namespace Plenty\Modules\Plugin\PluginSet\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Plugin\Exceptions\TooManyPluginSetsException;
use Plenty\Modules\Plugin\Models\LayoutContainer;
use Plenty\Modules\Plugin\Models\Plugin;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;
use Plenty\Modules\Plugin\PluginSet\Models\PluginSetEntry;
use Plenty\Modules\System\Models\Webstore;

/**
 * list, create, update or delete plugin sets
 */
interface PluginSetRepositoryContract 
{

	/**
	 * Count current plugin sets.
	 */
	public function count(
	):int;

	/**
	 * Create a plugin set. The data array has to contain a 'name' field. Throws a 'TooManyPluginSetsException' if the maximum number of sets is exceeded.
	 */
	public function create(
		array $data
	):PluginSet;

	/**
	 * Copy a plugin set. All set entries from the source set will be copied into the new set.
	 */
	public function copy(
		array $data
	):PluginSet;

	/**
	 * Update a set. Only the 'name' field can be updated.
	 */
	public function update(
		int $id, 
		array $data
	):PluginSet;

	/**
	 * Delete a set.
	 */
	public function delete(
		 $what
	):int;

	/**
	 * Get a plugin set.
	 */
	public function get(
		 $pluginSetOrId
	):PluginSet;

	/**
	 * List all plugin sets.
	 */
	public function list(
	):array;

	/**
	 * List all set entries of a plugin set.
	 */
	public function listSetEntries(
		int $id
	);

	/**
	 * List all webstores a plugin set is related to.
	 */
	public function listWebstores(
		int $id
	);

	/**
	 * List all LayoutContainers for a plugin set.
	 */
	public function listLayoutContainers(
		int $id
	);

	/**
	 * Get the PluginSetEntry object containing a specific plugin for a set. If a PluginSetEntry does not exist, it will be created.
	 */
	public function getOrCreatePluginSetEntry(
		int $id, 
		int $pluginId, 
		bool $withTrashed = false, 
		bool $resetCache = true
	):PluginSetEntry;

	/**
	 * Activates / deactivates a plugin for a set by trashing or restoring the respective set entry.
	 */
	public function changePluginActiveStatusForSet(
		int $pluginSetId, 
		int $pluginId, 
		bool $active
	):Plugin;

	public function removePluginFromSet(
		int $setId, 
		int $pluginId
	):Plugin;

	/**
	 * Create a preview hash for a plugin set.
	 */
	public function createPreviewHash(
		int $setId
	):string;

	/**
	 * Extract a plugin set id from a preview hash.
	 */
	public function getPreviewPluginSetId(
		string $previewHash
	);

	/**
	 * Install a git-plugin into a set.
	 */
	public function installGitPlugin(
		int $setId, 
		int $pluginId, 
		array $requestData
	):bool;

	/**
	 * Change the position of a plugin in a set
	 */
	public function setPosition(
		int $setId, 
		int $pluginId, 
		array $requestData
	);

	/**
	 * Get the sync state, to determine if Plugins have been (de-)activated since last build.
	 */
	public function getSyncState(
		int $pluginSetId
	):bool;

	public function getPluginSetHash(
		 $pluginSetOrId
	):string;

	public function getPluginSetIdFromHash(
		string $pluginSetHash
	):int;

	/**
	 * Get the PluginSetID of the currently running plugin.
	 */
	public function getCurrentPluginSetId(
	):int;

}
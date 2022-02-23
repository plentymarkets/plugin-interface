<?php
namespace Plenty\Console\Commands;

use Plenty\Modules\Plugin\PluginSet\Models\PluginSet;

/**
 * Event
 */
abstract class GenerateShopBuilderPresetsEvent 
{

	/**
	 * Get the plugin set which have been built
	 */
	abstract public function getPluginSet(
	):PluginSet;

}
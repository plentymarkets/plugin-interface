<?php
namespace Plenty\Modules\Plugin\Events;


/**
 * Event after a plugin file was updated.
 */
abstract class AfterCodeUpdate 
{

	abstract public function getPluginSetId(
	):int;

	abstract public function getPluginId(
	):int;

}
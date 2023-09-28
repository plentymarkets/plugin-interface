<?php
namespace Plenty\Modules\Flow\Triggers\Definitions\Contracts;

use Plenty\Modules\Flow\DataModels\ConfigForm\FormField;

/**
 * Flow trigger plugin Definition
 */
interface FlowTriggerPluginDefinitionContract 
{

	public function getPluginName(
	):string;

	public function getPluginGroupName(
	):string;

	public function getTriggerType(
	):string;

	public function getTriggerObject(
	):string;

	public function getTriggerIdentifier(
	):string;

	public function getTriggerName(
	):string;

	public function getTriggerDescription(
	):string;

	public function getUIConfigField(
	):FormField;

}